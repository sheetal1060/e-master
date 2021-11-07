<?php
session_start();
?>
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
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $email_search = "select * from registration where email='$email'";
        $query = mysqli_query($con, $email_search);

        $email_count = mysqli_num_rows($query);

        if ($email_count) {
            $email_pass = mysqli_fetch_assoc($query);
            $db_pass = $email_pass['password'];

            $_SESSION['email']=$email_pass['username'];

            $pass_decode = password_verify($password, $db_pass);
            if ($pass_decode) {
                echo "login sucessful";
                header('location:home.php');
            } else {
                echo "password incorrect";
            }
        } else {
            echo "Invalid email";
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
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?> " method="POST">
                <div class="form-group input-group ">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-user fa-2x"></i></span>
                    </div>
                    <input name="email" class="form-control" placeholder="Email" type="text" required>
                </div><br>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-lock fa-2x"></i>
                        </span>
                    </div>
                    <input name="password" class="form-control" placeholder="Create password" type="password" required>
                </div><br>

                <div class="form-group  d-grid gap-2 ">
                    <button name="submit" type="submit" class=" btn btn-primary btn-block btn-lg ">
                        Log In
                    </button>
                </div><br>
                <h5 class="text-center">Don't have an account? <a href="regis.php">Create Account</a></h5>
            </form>
        </article>
    </div>
    <?php include "footer.php"; ?>
</body>

</html>