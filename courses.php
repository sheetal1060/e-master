<!DOCTYPE html>
<html lang="en">

<head>
  <title>courses</title>
  <?php include "css/index.php" ?>
  <?php include "links/links.php" ?>
<style>
.video{
    margin-top: 10%;
}
</style>
</head>
<body>
<?php include "header.php" ?><hr>
<br><br><br>
<div class="container mt-3 mb-3 video ">
    <div class="row">
        <?php include 'dbcon.php';
        $q='select *from video';
        $query=mysqli_query($con,$q);
        while($row=mysqli_fetch_array($query)){
        ?>
        <div class="col-md-4">
            <video id="myVideo" width='100%' controls>
                <source src="<?php echo 'upload/'.$row['name'];?>">
            </video>
        </div>
        <?php }
        ?>
    </div>
</div><?php include "footer.php"; ?>
</body>
</html>
