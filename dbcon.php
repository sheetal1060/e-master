<?php
$server="localhost";
$username="root";
$password="";
$database="e-master";
$con=mysqli_connect($server,$username,$password,$database);
if($con){
    ?>
    <script>
        alert("Connection Successful");
        </script>
        <?php
}else{
    ?>
    <script>
        alert("No Connection");
        </script>
        <?php
}

?>