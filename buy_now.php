<?php 

    session_start();

?>


<!DOCTYPE html>
<link rel="stylesheet" href="buy.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image" href="Images/logo.png">
<link href="Styles/MainPage.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Festive&family=Pacifico&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@300&display=swap" rel="stylesheet">
<html>

<head>
    <title>Buy Now</title>
</head>
<div class="title-div">
        <div id="logo"></div>
        <div class="title">Urban</div>
        <div id="v"></div>
        <div class="title" style="margin-left: -20px;">ogue</div>
        <div class="fashion">Fashion as Unique as You are!</div>
        <div id="menu-div">
            <ol>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">MEN</a>
                    <div class="dropdown-content">
                        <b style="border-top: 0px;">Top Wear</b>
                        <ul>
                            <a href="../Tee/tee.php">T- Shirt</a>
                            <a href="../Shirt/shirt.php">Shirt</a>
                            <a href="../jacket/jacket.php">Jacket</a>
                        </ul>
                        <b>Bottom Wear</b>
                        <ul>
                            <a href="../trousers/trousers.php">Trousers</a>
                            <a href="../pyjama/pyjama.php">Pyjamas</a>
                            <a href="../pants/pants.php">Pants</a>
                        </ul>
                        <b>Festive Wear</b>
                        <ul>
                            <a href="../kurta_home/main.php">Kurta</a>
                            <a href="../patiala/patiala.php">Patiala</a>
                            <a href="../dhoti/dhoti.php" style="padding-bottom: 10px;">Dhoti</a>
                        </ul>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">WOMEN</a>
                    <div class="dropdown-content" style="margin-left: -40px;">
                        <b style="border-top: 0px;">Fusion Wear</b>
                        <ul>
                            <a href="../TrouWo/TrouWo.php">Trousers</a>
                            <a href="../plaz/plaz.php">Plazzos</a>
                            <a href="../suits/suits.php">Suit</a>
                        </ul>
                        <b>Western Wear</b>
                        <ul>
                            <a href="../skirt_home/skirt.php">Skirt</a>
                            <a href="../tops/tops.php">Top</a>
                            <a href="../stole/stole.php">Stole</a>
                        </ul>
                        <b>Festive Wear</b>
                        <ul>
                            <a href="#">Kurta</a>
                            <a href="#">Sharara</a>
                            <a href="../saree_home/saree.php" style="padding-bottom: 10px;">Saree</a>
                        </ul>
                    </div>
                </li>
                <li><a href="../Kids/kids.php" style="text-decoration: none; color: #282c3f;">KIDS</a></li>

                <li>CUSTOM CLOTHING</li>
                <li>OFFER ZONE</li>
                <li><a href="../Aboutus/AboutUs.php" style="text-decoration: none; color: #282c3f;">ABOUT US</a></li>
                <li class="dropdown">
                    <a href="../Profile/profile.php" style="margin-left: 10px; text-decoration: none;color: black;"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_SESSION['username']; ?></a>
                </li>
            </ol>
        </div>
    </div>
    <br><br>
   
    <div class="parent">
        <div class="child-left">
            <?php


                $var = $_GET['link'];
                $_SESSION['link'] = $_GET['link'];
               
            ?>
                <img src="<?php echo $var; ?>" class = "image">
        </div>
        <div class="child-right">
            <?php
            $brand = $_GET['brand'];
            $price = $_GET['price'];
            $color = $_GET['color'];
            $descrip = $_GET['desc'];

            $_SESSION['brand'] = $_GET['brand'];
            $_SESSION['price'] = $_GET['price'];
            $_SESSION['description'] = $_GET['desc'];
            $_SESSION['color'] = $_GET['color'];
            ?>
            <h1 class="brand"><?php echo $brand ?></h1>
            <h1 class="descrip"><?php echo $descrip ?></h1>
            <h1 class="price">Rs.
                <?php echo $price ?>
            </h1>
            <h4>inclusive of all taxes</h4>
            <h1 class="color">Colour - <?php echo $color ?></h1>

            <a href="./Shipping/ship.php"><button class="buy_btn">Buy Now</button></a>
            <a href="./CustomPage/Customization.php"><button class="custom">Customize your Apparel</button></a>

            <br>

            <p class = "detail">
                100% Original Products <br>
                Cash on Delivery <br>
                Easy 30 days returns and exchanges <br>
                Try & Buy might be available <br>
            </p>


        </div>
    </div>
    </div>
</body>

</html>