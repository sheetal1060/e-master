<?php
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>log in</title>
    <?php include "css/style.php" ?>
    <?php include "links/links.php" ?>
</head>

<body>

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
            <form action="loginCredentials.php" method="POST">
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
                    <input name="password" class="form-control" placeholder="Password" type="text" required>
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