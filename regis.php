<!DOCTYPE html>
<html lang="en">

<head>
    <title>registration</title>
    <?php include "css/style.php" ?>
    <?php include "links/links.php" ?>
</head>

<body>
<?php 

include 'dbcon.php';

// error_reporting(0);

// session_start();

// if (isset($_SESSION['username'])) {
//     header("Location: index.php");
// }

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
    $mobile = $_POST['mobile'];
	$password =($_POST['password']);
	$cpassword =($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM registration WHERE email='$email'";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$sql = "INSERT INTO registration (username, email, mobile, password)
					VALUES ('$username', '$email','$mobile', '$password')";
			$result = mysqli_query($con, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>
    <div class="card  bg-light">
        <article class="card-body mx-auto" style="width: 400px;">
            <h3 class="card-title mt-3 text-center"> CREATE ACCOUNT</h3>
            <h5 class="text-center">Get started your free Account</h5>
            <p class="d-grid gap-2">
                <a href="" class="btn  btn-block btn-gmail"><i class="fa fa-google "></i> &nbsp;&nbsp;&nbsp; Login via Google</a>
                <a href="" class="btn btn-block btn-facebook"><i class="fa fa-facebook "></i> &nbsp;&nbsp;&nbsp; Login via Facebook</a>
            </p>
            <h5 class="divider-text">
                <span class="bg-light">OR</span>
            </h5>
            <form action=" " method="POST">
                <div class="form-group input-group ">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-user fa-2x"></i></span>
                    </div>
                    <input name="username" class="form-control" placeholder="Full name" type="text" required>
                </div><br>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-envelope fa-2x"></i>
                        </span>
                    </div>
                    <input name="email" class="form-control" placeholder="Email address" type="email" required>
                </div><br>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-phone fa-2x"></i>
                        </span>
                    </div>
                    <input name="mobile" class="form-control" placeholder="Phone number" type="number" required>
                </div><br>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-lock fa-2x"></i>
                        </span>
                    </div>
                    <input name="password" class="form-control" placeholder="Create password" type="password" required>
                </div><br>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-lock fa-2x"></i>
                        </span>
                    </div>
                    <input name="cpassword" class="form-control" placeholder="Confirm Password" type="password" required>
                </div><br>
                <div class="form-group  d-grid gap-2 ">
                    <button name="submit" type="submit" class=" btn btn-primary btn-block btn-lg ">
                        Create Account
                    </button>
                </div><br>
                <h5 class="text-center">Have an account? <a href="login.php">Log In</a></h5>
            </form>
        </article>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>