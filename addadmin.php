<!DOCTYPE html>
<html lang="en">
<head>
    <title>e-master</title>
    <?php include "css/index.php" ?>
    <?php include "links/links.php" ?>
    <script type="text/javascript" src="imgandjs/main.js"></script>
	<style>
	th,tr, td {
		padding:5px;   
	}
	</style>
</head>
<body>
	<?php
		include "nav.php";
		$strconn=mysqli_connect("localhost","root","","e-master");
		if(!$strconn)
			echo "Connection failed".mysqli_connect_error();
		else
		{}
	?>
	<section id="addadmin" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>Add Admin</h1>
                </div>
            </div>
        </div>
</section>
	<form method="POST" action="#">
		<table border=0 class="center" align="center">
			<tr>
				<td><label>Enter Your User Name :</label></td>
				<td><input type="text" class="form-control" name="username" placeholder="User Name"></td>
			</tr>
			<tr>
				<td><label>Enter Your Password :</label></td>
				<td><input type="password" class="form-control" name="pass" placeholder="Password"></td>
			</tr>
			<tr>
				<td colspan="2" class="center" align="center"><button class="btn btn-primary btn-block" name="btn">Register</button></td>
			</tr>
			<tr>
				<td colspan="2" class="center" align="center"><button class="btn btn-primary btn-block">Reset</button></td>
			</tr>
		</table>
	</form>
	<?php
		if(isset($_POST['btn']))
		{
		$username = $_POST['username'];
		$password = $_POST['pass'];
		$query = "INSERT INTO admin_info(UserName,Password) VALUES('$username','$password')";
		$result = mysqli_query($strconn,$query);
		if($result)
		{
			echo "<div class='alert alert-success' role='alert'>Successfull</div>";
		}
		else
		{
			echo "<div class='alert alert-danger' role='alert'>Something went wrong.Please try again later !</div>";
		}
		}
	?>
	<?php
		include "footer.php";
	?>
</body>
</html>