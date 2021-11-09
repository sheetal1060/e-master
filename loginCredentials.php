<?php
session_start();
if (isset($_SESSION['logged'])){
	echo '<script>alert("YOU ARE ALREADY LOGGED IN!");</script>';
	echo '<script>location.href="courses.php";</script>';
}
// Initialize the session
else if(isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])){
        // Prepare a select statement
		$demail='';
		$dpasswd='';
	
		require 'dbcon.php';
		$email=$_POST['email'];
		$passwd=$_POST['password'];
			
		$sql = "SELECT email, password FROM registration WHERE email = '$email'";
		$result = $con->query($sql);
		if ($result !== false && $result->num_rows > 0) {

			while($row = $result->fetch_assoc()) {
				$demail=$row["email"];
				$dpasswd=$row["password"];
			}
		}
			    // Close connection
		mysqli_close($con);
		
		
		
	
        if ($email==$demail && $passwd==$dpasswd){
			$_SESSION['logged']=$email;
			session_start();
			header("Location:courses.php");
		}
        else{
                // email doesn't exist, display a generic error message
            echo '<script>alert("Invalid email or password\nTry Again!");</script>';
			echo '<script>location.href="index.php";</script>';
		}
	}
else{
			header("Location: index.php?failedlogin");
}
    


?>