<?php
    session_start();
?>

<!DOCTYPE html>
<link rel="stylesheet" href="./Register/style.css">
<html>

<head>
    <script src="https://kit.fontawesome.com/e48d166edc.js" crossorigin="anonymous"></script>
    <title>Sign In </title>
</head>

<body>

<?php 
    
    include "config_login.php";

    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $password = $_POST['password'];
    
        $user_search = "SELECT * FROM users where username = '$user' ";
        $query = mysqli_query($db, $user_search);

        $count = mysqli_num_rows($query);

        if($count){
            $user_pas = mysqli_fetch_assoc($query);

            $db_pass = $user_pas['password'];

            $_SESSION['username'] = $user_pas['username']; 
            $_SESSION['email'] = $user_pas['email'];
            $_SESSION['gender'] = $user_pas['gender'];
            $_SESSION['address'] = $user_pas['address'];
            $_SESSION['shoulder'] = $user_pas['shoulder'];
            $_SESSION['neck'] = $user_pas['neck'];
            $_SESSION['arm'] = $user_pas['arm'];
            $_SESSION['sleeve'] = $user_pas['sleeve'];
            $_SESSION['wrist'] = $user_pas['wrist'];
            $_SESSION['chest'] = $user_pas['chest'];
            $_SESSION['waist'] = $user_pas['waist'];
            $_SESSION['thigh'] = $user_pas['thigh'];
            $_SESSION['length'] = $user_pas['length'];
            $_SESSION['ankle'] = $user_pas['ankle'];
            $_SESSION['mobile'] = $user_pas['mobile'];


            $pass_match = password_verify($password, $db_pass);
            if($pass_match){
                ?>
                <script type="text/javascript">
                    console.log("Welcome");
                </script>
                <?php
                header("Location: ./Main_page/MainPage.php");
            }
            else {
                ?>
                <script type="text/javascript">
                    alert("Invalid username or password!");
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
                    <h1>Sign In</h1>
                    <p>Hurry up. The stocks may run out soon. </p>
                </div>

                <div class="login-inner-content">
                    <div class="input-div one">
                        <div class="i">
                            <i class="far fa-user-circle"></i>
                        </div>
                        <div class="div">
                            <h5 style="color: black;">User Id</h5>
                            <input type="text" class="input" name = "username" required>
                        </div>
                    </div>

                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-eye" onclick="show()"></i>
                        </div>
                        <div class="div">
                            <h5 style="color: black;">Password</h5>
                            <input id="pswrd" type="password"  name = "password" class="input" required>
                        </div>
                    </div>
                </div>
                <input type="submit" name="submit" class="btn" value="Login">
                <h5>Haven't Signed up yet ? <a class="text-link" href="register.php">Sign Up</a></h5>
            </form>
        </div>
    </div>
</body>
<script src="./Register/register.js"></script>

</html>