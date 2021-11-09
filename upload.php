<?php include "dbcon.php";
if(isset($_POST['upload'])){
    // $name= $_FILES['file'];
    // echo '<pre>';
    // print_r($name);
    // exit();
    $file_name=$_FILES['file']['name'];
    $file_type=$_FILES['file']['type'];
    $temp_name=$_FILES['file']['tmp_name'];
    $file_size=$_FILES['file']['size'];
    $file_destination="upload/".$file_name;
    if (move_uploaded_file($temp_name,$file_destination)){
        $q="insert into video(name) values ('$file_name')";
        if(mysqli_query($con,$q)){
            $success="video uploaded";
        }else{
            $failed="error";
        }
    }else
    {
        $msz="please select video to upload";
    }
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
    <?php include "links/links.php" ?>
</head>
<body>

<div class="container mt-3">
    <h1 class="text-center mb-5"><b>Upload vedio</b>
</h1>
<div class="col-lg-8 m-auto">
<form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label><strong>Upload a video: </strong></label>
        <input type="file" name="file" class="form-control">

    </div>
    <?php if(isset($success)) {?>
        <div class="alert alert-success">

        <?php echo $success;?>

        </div>
        <?php ?>
        <?php 
       if(isset($failed)) {?>
        <div class="alert alert-danger">

        <?php echo $failed;?>

        </div>
        <?php }?>
        </php  if(isset($msz)) {?>
        <div class="alert alert-danger">

        <?php 
        echo $msz; 
        ?>

        </div>
        <?php }?>
        <br>

        <input type="submit" name="upload" class="btn btn-success ml-3">
</form>
</div>
</div>
    </body>
</html>