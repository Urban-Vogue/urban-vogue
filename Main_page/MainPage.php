<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Urban Vogue</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
    <link rel="shortcut icon" type="image" href="Images/logo.png">
    <link href="MainPage.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Festive&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fondamento&display=swap" rel="stylesheet">
</head>

<body>
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

                <li><a href="../Custom/custom.php" style="text-decoration: none; color: #282c3f;">CUSTOM CLOTHING</a></li>

                <li>OFFER ZONE</li>
                <li><a href="../Aboutus/AboutUs.php" style="text-decoration: none; color: #282c3f;">ABOUT US</a></li>
                <li class="dropdown">
                    <a href="../Profile/profile.php" style="margin-left: 10px; text-decoration: none;color: black;"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_SESSION['username']; ?></a>
                </li>
            </ol>
        </div>
    </div>
    <div class="Coupon CouponCol">
        <div class="CouponArrow CouponArrowCol"></div>
        <p class="CouponContent">FLAT ₹100 OFF</p>
    </div>
    <div class="banner">
        <marquee behavior="scroll"  scrollamount = "10" direction="left">
            <img src="./Images/3.webp" alt="" height="288" style="margin-right: 10px; margin-top:7px">
            <img src="./Images/5.webp" alt="" height="288" style="margin-right: 10px; margin-top:7px">
            <img src="./Images/7.webp" alt="" height="288" style="margin-right: 10px; margin-top:7px">
            <img src="./Images/9.webp" alt="" height="288" style="margin-right: 10px; margin-top:7px">
            <img src="./Images/2.webp" alt="" height="288" style="margin-right: 10px; margin-top:7px">
            <img src="./Images/10.webp" alt="" height="288" style="margin-right: 10px; margin-top:7px">
            <img src="./Images/13.webp" alt="" height="288" style="margin-right: 10px; margin-top:7px">
            <img src="./Images/14.webp" alt="" height="288" style="margin-right: 10px; margin-top:7px">
            <img src="./Images/15.webp" alt="" height="288" style="margin-right: 10px; margin-top:7px">
            <img src="./Images/3.webp" alt="" height="288" style="margin-right: 10px; margin-top:7px">
            <img src="./Images/5.webp" alt="" height="288" style="margin-right: 10px; margin-top:7px">
            <img src="./Images/7.webp" alt="" height="288" style="margin-right: 10px; margin-top:7px">
            <img src="./Images/9.webp" alt="" height="288" style="margin-right: 10px; margin-top:7px">
            <img src="./Images/2.webp" alt="" height="288" style="margin-right: 10px; margin-top:7px">
            <img src="./Images/10.webp" alt="" height="288" style="margin-right: 10px; margin-top:7px">
            <img src="./Images/13.webp" alt="" height="288" style="margin-right: 10px; margin-top:7px">
            <img src="./Images/14.webp" alt="" height="288" style="margin-right: 10px; margin-top:7px">
            <img src="./Images/15.webp" alt="" height="288" style="margin-right: 10px; margin-top:7px">
        </marquee>
    </div>
    <div class="topbrands">
        <div class="topbrands-content">WOMEN</div>
        <div class="topbrands-contentpic">
            <div class="video">
                <video muted autoplay loop controls height="400" width="100%">
                    <source src="video.mp4">
                </video>
            </div>
            <div class="women">
                <a href="../saree_home/saree.php" target="_blank" style="text-decoration: none;">
                    Women Section
                </a>
            </div>
        </div>
    </div>
    <br>
    <div class="topbrands">
        <div class="topbrands-content">BESTSELLERS</div>
        <div class="topbrands-contentpic top">
            <img src="saree.jpg" alt="">
            <img src="suit.webp" alt="">
            <img src="plaz.webp" alt="">
            <img src="tee.jpg" alt="">
        </div>
    </div>
    <br>
    <div class="topbrands">
        <div class="topbrands-content">MEN</div>
        <div class="topbrands-contentpic">
            <div class="women">
                <a href="../kurta_home/main.php" target="_blank" style="text-decoration: none;">
                    Men Section
                </a>
            </div>
            <div class="video">
                <video muted autoplay loop controls height="400" width="100%">
                    <source src="video2.mp4">
                </video>
            </div>
        </div>
    </div>
    <br>
    <div class="topbrands">
        <div class="topbrands-content">TOP DEALS </div>
        <div class="topbrands-contentpic top">
            <img src="kur.jpg" alt="">
            <img src="kurta.webp" alt="">
            <img src="low.webp" alt="">
            <img src="top.webp" alt="">
        </div>
    </div>
    <br>
    <br>
    <br>
    <footer>
        <div class="footer-content">
            <div class="title">Urban Vogue</div>
            <p>Dhruv Aggarwal and Eshaan Maheshwary <br> Contact No: +91 7814437756, +91 8126042987</p>
            <ul class="socials">
                <li><a href="https://www.facebook.com/urbanforvogue/"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/urban.vogue80/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-github"></i></a></li>
                <li><a href="https://www.linkedin.com/in/dhruv-aggarwal-440a901bb/" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                <li><a href="https://www.linkedin.com/in/eshaan-maheshwary-38bb80204/"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2021 Urban Vogue. designed by <span>DE</span></p>
        </div>
    </footer>
</body>

</html>