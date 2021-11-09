<!DOCTYPE html>
<html lang="en">
<head>
    <title>e-master</title>
    <?php include "css/index.php" ?>
    <?php include "links/links.php" ?>
    <script type="text/javascript" src="imgandjs/main.js"></script>
	<style>
	tr, td {
		padding:10px;   
	}
	</style>
</head>
<body>
	
<?php
		$strconn=mysqli_connect("localhost","root","","e-master");
		if(!$strconn)
			echo "Connection failed".mysqli_connect_error();
		else{}
	?>
 <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">e-Master</a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0 ">
        <ul>
          <li><a class="active" href="index.php">Home</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
</div>
  </header>

	<section id="addadmin" class="secondary" text-align="center">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Admin Login</h1>
				</div>
			</div>
		</div>
</section>
	<form action="" method="POST">
		<table class="table center" border=0 align="center" >
			<tr>
				<td><label>Enter your User Name:</label></td>
				<td><input type="text" class="form-control" name="id" placeholder="User Name"></td>
			</tr>
			<tr>
				<td><label>Enter your Password:</label></td>
				<td><input type="password" class="form-control" name="pass" placeholder="Password"></td>
			</tr>
			<tr>
				<td colspan="2"align="center"><button name="btnsubmit" class="btn btn-primary btn-block">Submit</button></td>
			</tr>
		</table>
	</form>
	<br>
	<?php
	if(!empty($_POST['id'])&&!empty($_POST['pass']))
	{
		if(isset($_POST['btnsubmit']))
		{
			$name = $_POST["id"]; 
            $password = $_POST["pass"]; 
			$query = "SELECT * FROM admin WHERE UserName='$name' and Password='$password'";
			$result = mysqli_query($strconn,$query);
			$count = mysqli_num_rows($result);
			if($count==1)
			{
				session_start();
				$_SESSION["username"]=$_POST['id'];
				
				echo("<script>location.href = 'adminindex.php';</script>");
				
			}
			else
			{
				echo "<div class='alert alert-danger' role='alert'><center>Username or password is incorrect..Try again<center></div>";
			}
		}
	}?>
	<?php
		include "footer.php";
	?>
</body>
</html>