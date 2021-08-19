<?php

session_start();

?>
<!doctype html>
<link rel="stylesheet" href="./Register/style.css">
<html>

<head>
    <script src="https://kit.fontawesome.com/e48d166edc.js" crossorigin="anonymous"></script>
    <title>Sign Up </title>
</head>

<body>

    <?php 

    include "config_login.php";

    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        $cpassword = mysqli_real_escape_string($db, $_POST['confirm_password']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
    

    $pass = password_hash($password, PASSWORD_BCRYPT); // used for hashing!
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $email_query = "SELECT * FROM users WHERE email = '$email'";
    $query = mysqli_query($db, $email_query);

    $emailcount = mysqli_num_rows($query);

    $user_query = "SELECT * FROM users WHERE username = '$username'";
    $uquery = mysqli_query($db, $user_query);  

    $usercount = mysqli_num_rows($uquery);

    if($emailcount || $usercount > 0){
        ?>
        <script type="text/javascript">
            alert("Username or email already exists!");
        </script>
        <?php
    }  

    else {
        if($password == $cpassword){

            $insert = "INSERT INTO users (username, email, password) values ('$username', '$email', '$pass')";

            $run_insert = mysqli_query($db, $insert);
        }

        if($run_insert){
            ?>
                <script type="text/javascript">
                    alert("Registeration Successfull!");
                </script>
            <?php

            header("Location: login.php");
            ?>
            <?php
        }
        else {
            ?>
                <script type="text/javascript">
                    alert("Registeration Failed!");
                </script>
            <?php
        }
    }
}
?>


    <div class="container">

        <div class="login-content">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="title-container">
                    <h1>Sign Up</h1>
                    <p>Welcome to our hive of UVians</p>
                </div>
                    <div class="login-inner-content">
                        <div class="input-div one">
                            <div class="i">
                                <i class="far fa-user-circle"></i>
                            </div>
                            <div class="div">
                                <h5 style="color: black;">User Id</h5>
                                <input type="text" class="input" name="username">
                            </div>
                        </div>

                        <div class="input-div pass">
                            <div class="i">
                                <i class="fas fa-eye" onclick="show()"></i>
                            </div>
                            <div class="div">
                                <h5 style="color: black;">Password</h5>
                                <input id="pswrd" type="password" class="input" pattern="[A-Za-z0-9]{8,}" name="password" required>
                            </div>
                        </div>

                        <div class="input-div pass">
                            <div class="i">
                                <i class="fas fa-eye" onclick="show()"></i>
                            </div>
                            <div class="div">
                                <h5 style="color: black;">Confirm Password</h5>
                                <input id="pswrd" type="password" class="input" name="confirm_password" required>
                            </div>
                        </div>
                        <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-envelope-square"></i>
                        </div>
                        <div class="div">
                            <h5 style="color: black;">E-mail Address</h5>
                            <input type="text" class="input" name = "email" required>
                        </div>
                        </div>
                    </div>
                    <input type="submit" name="submit" class="btn" value="Register">
                    <h5>Already have an account ? <a class="text-link" href="login.php">Sign In</a></h5>
                </form>
        </div>
    </div>
</body>
<script src="./Register/register.js"></script>

</html>