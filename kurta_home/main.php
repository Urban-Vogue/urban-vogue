<?php 

    session_start();

?>

<!DOCTYPE html>
<link rel="stylesheet" href="./style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image" href="Images/logo.png">
<link href="Styles/MainPage.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Festive&family=Pacifico&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

<html>

<head>
    <title>Kurtas for Men</title>
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
    <section class="imag"></section> <!-- for image change in banner -->
    <script src="./Images/kurta.js"></script>

    <div class="content-page">

        <form action="" method="GET">
            <div class="filter">
                <h4>Filters&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit" class="btn btn-primary btn-sm float-end">Search</button>
                </h4>
                <hr>
            </div>
            <div class="card-body">
                <h5>Brand</h5>
                <hr>
                <?php
                $con = mysqli_connect("localhost", "root", "", "clothes-stock");

                $brand_query = "SELECT * FROM clothes where type = 'Kurta' and gender = 'Men' group by brand ";
                $brand_query_run  = mysqli_query($con, $brand_query);

                if (mysqli_num_rows($brand_query_run) > 0) {
                    foreach ($brand_query_run as $brandlist) {
                        $checked = [];
                        if (isset($_GET['brands'])) {
                            $checked = $_GET['brands'];
                        }
                ?>
                        <div>
                            <input type="checkbox" name="brands[]" value="<?= $brandlist['brand']; ?>" <?php if (in_array($brandlist['brand'], $checked)) {
                                                                                                            echo "checked";
                                                                                                        } ?> />
                            <?= $brandlist['brand']; ?>
                        </div>
                <?php
                    }
                } else {
                    echo "No Brands Found";
                }
                ?>

                <!-- For color-->

                <br>
                <h5>Color</h5>
                <hr>
                <?php
                $con = mysqli_connect("localhost", "root", "", "clothes-stock");

                $brand_query = "SELECT * FROM clothes where type = 'kurta' and gender = 'men' group by color ";
                $brand_query_run  = mysqli_query($con, $brand_query);

                if (mysqli_num_rows($brand_query_run) > 0) {
                    foreach ($brand_query_run as $brandlist) {
                        $checked = [];
                        if (isset($_GET['colors'])) {
                            $checked = $_GET['colors'];
                        }
                ?>
                        <div>
                            <input type="checkbox" name="colors[]" value="<?= $brandlist['color']; ?>" <?php if (in_array($brandlist['color'], $checked)) {
                                                                                                            echo "checked";
                                                                                                        } ?> />
                            <?= $brandlist['color']; ?>
                        </div>
                <?php
                    }
                } else {
                    echo "No Colors Found";
                }
                ?>

                <!-- For pricing-->

                <br>
                <h5>Price</h5>
                <hr>
                <?php

      
                $con = mysqli_connect("localhost", "root", "", "clothes-stock");

                $brand_query = "SELECT * FROM clothes where type = 'kurta' and gender = 'men' group by price ";
                $brand_query_run  = mysqli_query($con, $brand_query);

                if (mysqli_num_rows($brand_query_run) > 0) {
                    foreach ($brand_query_run as $brandlist) {
                        $checked = [];
                        if (isset($_GET['prices'])) {
                            $checked = $_GET['prices'];
                        }
                ?>
                        <div>
                            <input type="checkbox" name="prices[]" value="<?= $brandlist['price']; ?>" <?php if (in_array($brandlist['price'], $checked)) {
                                                                                                echo "checked";
                                                                                                        } ?> />
                            <?php echo '₹' ?>
                            <?= $brandlist['price']; ?>
                        </div>
                <?php
                    }
                } else {
                    echo "No Price Found";
                }
                ?>

            </div>
        </form>

        <!-- For filter results -->

        <div class="showcase">
            <?php

            if (isset($_GET['colors'])) {

                // for pagination

                $branchecked = [];
                $branchecked = $_GET['colors'];
                foreach ($branchecked as $rowbrand) {
                    $results_per_page = 80;
                    $query = "SELECT * FROM clothes WHERE gender = 'men' and type = 'kurta' and color IN ('$rowbrand')";
                    $result = mysqli_query($con, $query);
                    $number_of_result = mysqli_num_rows($result);

                    $number_of_page = ceil($number_of_result / $results_per_page);

                    if (!isset($_GET['page'])) {
                        $page = 1;
                    } else {
                        $page = $_GET['page'];
                    }

                    $page_first_result = ($page - 1) * $results_per_page;

                    $products = "SELECT * FROM clothes WHERE gender = 'men' and color IN ('$rowbrand') LIMIT " . $page_first_result . ',' . $results_per_page;
                    $products_run = mysqli_query($con, $products);
                    if (mysqli_num_rows($products_run) > 0) {
                        foreach ($products_run as $proditems) :
            ?>
                            <?php
                            while ($data = mysqli_fetch_array($products_run)) {
                            ?>
                                <a href="../buy_now.php?color=<?php echo $data['color'] ?>&price=<?php echo $data['price'] ?>&brand=<?php echo $data['brand'] ?>&link=<?php echo $data['link'] ?>&price=<?php echo $data['price'] ?>&color=<?php echo $data['color'] ?>&desc=<?php echo $data['description'] ?>" target="_blank">
                                    <div class="models">
                                        <img src="<?php echo $data['link']; ?>" width="210" height="250">
                                        <div class="price">
                                            <?php echo $data['brand']; ?>
                                            <br>
                                            <?php echo "Rs."; ?>
                                            <?php echo $data['price']; ?>
                                        </div>
                                    </div>
                                </a>
                            <?php
                            };
                            ?>
                        <?php

                        endforeach;
                    }
                }
            } else if (isset($_GET['prices'])) {

                // for pagination

                $branchecked = [];
                $branchecked = $_GET['prices'];
                foreach ($branchecked as $rowbrand) {
                    $results_per_page = 80;
                    $query = "SELECT * FROM clothes WHERE gender = 'men' and type = 'kurta' and price IN ('$rowbrand')";
                    $result = mysqli_query($con, $query);
                    $number_of_result = mysqli_num_rows($result);

                    $number_of_page = ceil($number_of_result / $results_per_page);

                    if (!isset($_GET['page'])) {
                        $page = 1;
                    } else {
                        $page = $_GET['page'];
                    }

                    $page_first_result = ($page - 1) * $results_per_page;

                    $products = "SELECT * FROM clothes WHERE gender = 'men' and price IN ('$rowbrand') LIMIT " . $page_first_result . ',' . $results_per_page;
                    $products_run = mysqli_query($con, $products);
                    if (mysqli_num_rows($products_run) > 0) {
                        foreach ($products_run as $proditems) :
                        ?>
                            <?php
                            while ($data = mysqli_fetch_array($products_run)) {
                            ?>
                                <a href="../buy_now.php?price=<?php echo $data['price'] ?>&brand=<?php echo $data['brand'] ?>&link=<?php echo $data['link'] ?>&price=<?php echo $data['price'] ?>&color=<?php echo $data['color'] ?>&desc=<?php echo $data['description'] ?>" target="_blank">
                                    <div class="models">
                                        <img src="<?php echo $data['link']; ?>" width="210" height="250">
                                        <div class="price">
                                            <?php echo $data['brand']; ?>
                                            <br>
                                            <?php echo "Rs."; ?>
                                            <?php echo $data['price']; ?>
                                        </div>
                                    </div>
                                </a>
                            <?php
                            };
                            ?>
                        <?php

                        endforeach;
                    }
                }
            } else if (isset($_GET['brands'])) {

                // for pagination

                $branchecked = [];
                $branchecked = $_GET['brands'];
                foreach ($branchecked as $rowbrand) {
                    $results_per_page = 80;
                    $query = "SELECT * FROM clothes WHERE gender = 'men' and type = 'kurta' and brand IN ('$rowbrand')";
                    $result = mysqli_query($con, $query);
                    $number_of_result = mysqli_num_rows($result);

                    $number_of_page = ceil($number_of_result / $results_per_page);

                    if (!isset($_GET['page'])) {
                        $page = 1;
                    } else {
                        $page = $_GET['page'];
                    }

                    $page_first_result = ($page - 1) * $results_per_page;

                    $products = "SELECT * FROM clothes WHERE gender = 'men' and brand IN ('$rowbrand') LIMIT " . $page_first_result . ',' . $results_per_page;
                    $products_run = mysqli_query($con, $products);
                    if (mysqli_num_rows($products_run) > 0) {
                        foreach ($products_run as $proditems) :
                        ?>
                            <?php
                            while ($data = mysqli_fetch_array($products_run)) {
                            ?>
                                <a href="../buy_now.php?brand=<?php echo $data['brand'] ?>&link=<?php echo $data['link'] ?>&price=<?php echo $data['price'] ?>&color=<?php echo $data['color'] ?>&desc=<?php echo $data['description'] ?>" target="_blank">
                                    <div class="models">
                                        <img src="<?php echo $data['link']; ?>" width="210" height="250">
                                        <div class="price">
                                            <?php echo $data['brand']; ?>
                                            <br>
                                            <?php echo "Rs."; ?>
                                            <?php echo $data['price']; ?>
                                        </div>
                                    </div>
                                </a>
                            <?php
                            };
                            ?>
                        <?php
                        
                        endforeach;
                    }
                }
            } else {

                $results_per_page = 41;
                $query = "SELECT * FROM clothes WHERE gender = 'men' and type = 'kurta' ";
                $result = mysqli_query($con, $query);
                $number_of_result = mysqli_num_rows($result);

                $number_of_page = ceil($number_of_result / $results_per_page);

                if (!isset($_GET['page'])) {
                    $page = 1;
                } else {
                    $page = $_GET['page'];
                }

                $page_first_result = ($page - 1) * $results_per_page;

                $products = "SELECT * FROM clothes WHERE gender = 'men' and type = 'kurta' LIMIT " . $page_first_result . ',' . $results_per_page;
                $products_run = mysqli_query($con, $products);



                // $products = "SELECT * FROM clothes where type = 'kurta' and gender = 'men'";
                // $products_run = mysqli_query($con, $products);
                if (mysqli_num_rows($products_run) > 0) {
                    foreach ($products_run as $proditems) :
                        ?>
                        <?php
                        while ($data = mysqli_fetch_assoc($products_run)) {
                        ?>
                            <a href="../buy_now.php?brand=<?php echo $data['brand'] ?>&link=<?php echo $data['link'] ?>&price=<?php echo $data['price'] ?>&color=<?php echo $data['color'] ?>&desc=<?php echo $data['description'] ?>">
                                <div class="models">
                                    <img src="<?php echo $data['link']; ?>" width="210" height="250">
                                    <div class="price">
                                        <?php echo $data['brand']; ?>
                                        <br>
                                        <?php echo "Rs."; ?>
                                        <?php echo $data['price']; ?>
                                    </div>
                                </div>
                            </a>
                        <?php
                        };
                        ?>
                        <div class="page-number">
                            <?php
                            for ($page = 1; $page <= $number_of_page; $page++) {
                                echo '<a style = "text-decoration: none; color: black; font-weight: bold; font-size: 18px; border: 1px solid black; padding: 2px; text-align: center; font-family: Calibri" href = "main.php?page=' . $page . ' ">' . $page . '&nbsp </a>';
                            }
                            ?>
                        </div>
            <?php
                    endforeach;
                } else {
                    echo "No Items Found";
                }
            }
            ?>

        </div>
    </div>
</body>

</html>