<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
}

?>

<!DOCTYPE html>
<link rel="stylesheet" href="profile.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Tokyo+Zoo&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@700&display=swap" rel="stylesheet">
<html>

<head>
    <title>Your Profile</title>
</head>

<body>
    <div class="profile">
        <h1>Your Profile</h1>
    </div>
    <div class="main">
        <div class="card">
            <img src="for all users.png" alt="John" style=" width: 240px; margin: auto; height: 270px; padding-top: 30px; border-radius: 50px;">
            <h1 style=" font-family: 'Tangerine'; font-size: 50px;"><?php echo $_SESSION['username']; ?></h1>
            <h1 style="font-family: 'Tangerine'; font-size: 40px; margin-top: -19px  "><?php echo $_SESSION['email']; ?></h1>
            <h1 style="  font-family: 'Tangerine'; font-size: 30px">Gender: <?php echo $_SESSION['gender']; ?></h1>
            <h1 style=" font-family: 'Tangerine'; font-size: 30px ">Mobile: <?php echo $_SESSION['mobile']; ?></h1>
        </div>
    </div>

    <?php

    include "../config_login.php";

    $var = $_SESSION['username']; // to get detail of the current user!

    if (isset($_POST['submit'])) {

        $username = mysqli_real_escape_string($db, $_POST['user']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
        $gender = mysqli_real_escape_string($db, $_POST['gender']);
        $address = mysqli_real_escape_string($db, $_POST['address']);

        $user_query = "SELECT * FROM users WHERE username = '$var' ";
        $uquery = mysqli_query($db, $user_query);

        $usercount = mysqli_num_rows($uquery);


        if ($usercount == 1) {

            $insert = "UPDATE users SET username = '$username', email = '$email', mobile = '$mobile', gender = '$gender', address = '$address' WHERE username = '$var' ";
            $run_insert = mysqli_query($db, $insert);
        }
    }
    ?>


    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="form">
        <div class="main-form">
            <marquee direction="left" class="submi">Edit Your Profile</marquee>
            <label>Username:</label>
            <input type="text" name="user" placeholder="Enter Username here" size="49">

            <label>Gender:</label>
            <br>
            <input type="radio" value="male" name="gender" checked>Male
            <input type="radio" value="female" name="gender">Female
            <input type="radio" value="others" name="gender">Others

            <label>Phone: </label>
            <input type="text" name="mobile" placeholder="Enter number here" value="+91" size="49">
            <label>Address: </label>
            <textarea cols="46" name="address" rows="7">Type here...</textarea>
            <label>Email Address: </label>
            <input type="text" name="email" placeholder="Enter Email">
            <br>
            <button type="submit" name="submit" class="btn">Update Details</button>
        </div>
    </form>

    <marquee class="fff" direction="left">!!!Logout once to Apply the Changes!!!</marquee>

    <button name="submit" class="btn1"><a href="../logout.php" style="text-decoration: none; color: white">Logout</a></button>

</body>

</html>