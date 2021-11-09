<!DOCTYPE html>
<html lang="en">

<head>
	<title>e-master</title>
	<?php include "css/index.php" ?>
	<?php include "links/links.php" ?>
	<script type="text/javascript" src="imgandjs/main.js"></script>

</head>

<body>
	<?php
	include "nav.php";
	$strconn = mysqli_connect("localhost", "root", "", "e-master");
	if (!$strconn)
		echo "Connection failed" . mysqli_connect_error();
	else {
	}
	session_start();
	if (isset($_SESSION["username"])) {
		$username = $_SESSION["username"];
	} else {
		echo 'session not started';
	}
	?>
	<hr><br>
	<section id="addadmin" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Admin</h1>
				</div>
			</div>
		</div>
</section>
	<br>
	<div id="courses">
		<section class="container">
			<div class="row">

				<div class="col-md-4">
					<div class="featured-box">
						<a href="subject.php">
							<i class="fa fa-cogs fa-2x"></i>
							<div class="text">
								<h3>Add Subject</h3>

							</div>
						</a>
					</div>
				</div>
			</div>
		</section>
	</div>
	</div>
	<div id="courses">
		<section class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
						<a href="upload.php">
							<i class="fa fa-cogs fa-2x"></i>
							<div class="text">
								<h3>Upload vedio</h3>

							</div>
						</a>
					</div>
				</div>

			</div>
	</div>
	<div id="courses">
		<section class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
						<a href="addadmin.php">
							<i class="fa fa-cogs fa-2x"></i>
							<div class="text">
								<h3>Add Admin</h3>

							</div>
						</a>
					</div>
				</div>

			</div>
	</div>

	<?php
	include "footer.php";
	?>
</body>

</html>