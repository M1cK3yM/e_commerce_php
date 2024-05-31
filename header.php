<?php
ob_start();
session_start();
require('config/functions.php');

//checking the login token that are expired



if(isset($_COOKIE['token'])) {
    if (checkToken($_COOKIE['token'])) {
        $current_date_time = date('Y-m-d H:i:s');

        $statement = mysqli_prepare($conn, "SELECT * FROM users WHERE token = ? ");
        mysqli_stmt_execute($statement, array($_COOKIE['token']));
        $result = mysqli_fetch_all(mysqli_stmt_get_result($statement), MYSQLI_ASSOC);
        if($result) {
            $t1 = strtotime($result['0']['updated_at']);
            $t2 = strtotime($current_date_time);
            $diff = $t2 - $t1;
            if($diff > TOKEN_EXPIRAION_TIME) {
                $statement = mysqli_prepare($conn, "UPDATE users SET token = NULL WHERE id = ?");
                mysqli_stmt_execute($statemen, array($result['0']['id']));
            }

            $_SESSION['customer'] = $result['0'];
        }
        
    } else {
        unset($_COOKIE['token']);
        unset($_SESSION['customer']);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Commerce Site</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/remixicon.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/styles.css">

</head>

<body>

    <div id="page" class="site">

        <aside class="site-off desktop-hide">
            <div class="off-canvas">
                <div class="canvas-head flexitem">
                    <div class="logo"><a href="index.php"><span class="circle"></span>.Store</a></div>
                    <a href="#" class="t-close flexcenter"><i class="ri-close-line"></i></a>
                </div>
                <div class="container">
                    <div class="right">
                        <ul class="flexitem main-links align-items-start" style="font-size: 13px; line-height: 36px; padding-top: 1.25em; margin: 1.25em 0; flex-direction: column;">

                            <li><a href="index.php">Home</a></li>
                            <li><a href="products.php">Products</a></li>

                        </ul>
                    </div>
                </div>

                <div class="categories">

                </div>
                <nav></nav>
                <div class="thetop-nav"></div>
            </div>
        </aside>
        <header>
            <!-- HEADER TOP -->

            <div class="header-top mobile-hide">
                <div class="container">
                    <div class="wrapper flexitem">
                        <div class="left">
                            <ul class="flexitem main-links">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Featured Products</a></li>
                                <li><a href="#">Wishlist</a></li>
                            </ul>
                        </div>
                        <div class="right">
                            <ul class="flexitem">

                                <?php
                                if (isset($_SESSION['customer'])) { ?>
                                    <li><a href="profile.php">My account</a></li>
                                    <li><a href="order-tracking">Order Tracking</a></li>
                                <?php } else {
                                ?>
                                    <li><a href="register.php">Sign Up</a></li>
                                    <li><a href="login.php">Log In</a></li>
                                <?php } ?>
                                <li><a href="#">USD <span class="icon-small"><i class="ri-arrow-down-s-line"></i></span></a>
                                    <ul>
                                        <li class="active"><a href="#">USD</a></li>
                                        <li><a href="#">EURO</a></li>
                                        <li><a href="#">GBP</a></li>
                                        <li><a href="#">IDR</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">English <span class="icon-small"><i class="ri-arrow-down-s-line"></i></span></a>
                                    <ul>
                                        <li class="active"><a href="#">English</a></li>
                                        <li><a href="#">Amharic</a></li>
                                        <li><a href="#">German</a></li>
                                        <li><a href="#">Spanish</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF HEADER TOP -->
            <div class="header-nav">
                <div class="container">
                    <div class="wrapper flexitem">
                        <a href="#" class="trigger desktop-hide"><span class="i ri-menu-2-line"></span></a>
                        <div class="left flexitem">
                            <div class="logo"><a href="index.php"><span class="circle"></span>.Store</a></div>
                            <nav class="mobile-hide">
                                <ul class="flexitem second-links">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="products.php">Products</a></li>
                                    <?php
                                    $statement = mysqli_prepare($conn, "SELECT * FROM main_category WHERE is_showed=1 AND is_new=0 ");
                                    mysqli_stmt_execute($statement);
                                    $result = mysqli_fetch_all(mysqli_stmt_get_result($statement), MYSQLI_ASSOC);

                                    foreach ($result as $row) {
                                    ?>
                                        <li class="has-subcategory"><a href=""><?php echo $row['mc_name']; ?>
                                                <div class="icon-small"><i class="ri-arrow-down-s-line"></i></div>
                                            </a>
                                            <div class="mega">
                                                <div class="container">
                                                    <div class="wrapper">
                                                        <?php
                                                        $statement = mysqli_prepare($conn, "SELECT * FROM sub_category WHERE mc_id=? ");
                                                        mysqli_stmt_execute($statement, array($row['mc_id']));
                                                        $result1 = mysqli_fetch_all(mysqli_stmt_get_result($statement), MYSQLI_ASSOC);

                                                        foreach ($result1 as $row1) {
                                                        ?>

                                                            <div class="flexcol">
                                                                <div class="row">
                                                                    <h4><?php echo $row1['sc_name']; ?></h4>
                                                                    <ul>
                                                                        <?php
                                                                        $statement = mysqli_prepare($conn, "SELECT * FROM end_category WHERE sc_id=? ");

                                                                        mysqli_stmt_execute($statement, array($row1['sc_id']));
                                                                        $result2 = mysqli_fetch_all(mysqli_stmt_get_result($statement), MYSQLI_ASSOC);

                                                                        foreach ($result2 as $row2) { ?>

                                                                            <li><a href="#"><?php echo $row2['ec_name']; ?></a></li>

                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </ul>
                                                                    <!-- to do view all brands timestap 21:30 -->
                                                                </div>
                                                            </div>

                                                        <?php
                                                        }
                                                        ?>
                                                        <div class="flexcol products">
                                                            <div class="row">
                                                                <div class="media">
                                                                    <div class="thumbnail object-cover">
                                                                        <a href="#">
                                                                            <img src="assets/products/apparel4.jpg" alt="">
                                                                        </a>

                                                                    </div>
                                                                </div>
                                                                <div class="text-content">
                                                                    <h4>Most wanted!</h4>
                                                                    <a href="#" class="primary-button">Order Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                    <li><a href="#">Sports
                                            <div class="fly-items">
                                                <span>New!</span>
                                            </div>
                                        </a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="right">
                            <ul class="flexitem second-links">
                                <li class="mobile-hide"><a href="#">
                                        <div class="icon-large"><i class="ri-heart-line"></i></div>
                                        <div class="fly-items"><span class="item-number">0</span></div>
                                    </a></li>
                                <li><a href="cart.php" class="iscart">
                                        <div class="icon-large">
                                            <i class="ri-shopping-cart-line"></i>
                                            <div class="fly-items"><span class="item-number">0</span></div>
                                        </div>
                                        <div class="icon-text">
                                            <div class="mini-text">Total</div>
                                            <div class="cart-total">$0.00</div>
                                        </div>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-main mobile-hide">
                <div class="container">
                    <div class="wrapper flexitem">
                        <div class="left">
                            <div class="a-cat">
                                <div class="a-head">
                                    <div class="main-text">All Categories</div>
                                    <div class="mini-text mobile-hide">Total 1059 Products</div>
                                    <a href="#" class="a-trigger mobile-hide">
                                        <i class="ri-menu-3-line ri-xl"></i>
                                        <i class="ri-close-line ri-xl"></i>
                                    </a>
                                </div>
                                <div class="a-menu">
                                    <ul class="second-links">
                                        <?php
                                        $statement = mysqli_prepare($conn, "SELECT * FROM main_category");
                                        mysqli_stmt_execute($statement);
                                        $result = mysqli_fetch_all(mysqli_stmt_get_result($statement), MYSQLI_ASSOC);


                                        foreach ($result as $row) {
                                            $statement = mysqli_prepare($conn, "SELECT * FROM sub_category WHERE mc_id=? ");
                                            mysqli_stmt_execute($statement, array($row['mc_id']));
                                            $result1 = mysqli_fetch_all(mysqli_stmt_get_result($statement), MYSQLI_ASSOC);

                                            if (empty($result1) != 1) {
                                        ?>
                                                <li class="has-child <?php echo $row['mc_name']; ?>">
                                                    <a href="#">
                                                        <div class="icon-large"><i class="<?php echo $row['icon']; ?>"></i>
                                                        </div>
                                                        <?php echo $row['mc_name']; ?>
                                                        <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                                    </a>
                                                    <?php

                                                    if (isset($result1['0'])) { ?>
                                                        <div class="mega">
                                                            <div class="flexcol"> <?php
                                                                                    foreach ($result1 as $row1) {
                                                                                    ?>
                                                                    <div class="row">
                                                                        <h4><a href="#"><?php echo $row1['sc_name']; ?></a></h4>
                                                                        <ul>
                                                                            <?php
                                                                                        $statement = mysqli_prepare($conn, "SELECT * FROM end_category WHERE sc_id=? ");
                                                                                        mysqli_stmt_execute($statement, array($row1['sc_id']));
                                                                                        $result2 = mysqli_fetch_all(mysqli_stmt_get_result($statement), MYSQLI_ASSOC);

                                                                                        foreach ($result2 as $row2) {
                                                                            ?>

                                                                                <li><a href="#"><?php echo $row2['ec_name']; ?></a></li>

                                                                            <?php
                                                                                        } ?>
                                                                        </ul>
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                        </div> <?php
                                                            }
                                                                ?>
                                                </li><?php

                                                    } else { ?>
                                                <li><a href="#"><span class="icon-large"><i class="<?php echo $row['icon']; ?>"></i></span>
                                                        <?php echo $row['mc_name']; ?>
                                                    </a>
                                                </li>

                                        <?php }
                                                } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="search-box">
                                <form action="" class="search">
                                    <span class="icon-large"><i class="ri-search-line"></i></span>
                                    <input type="search" name="search" id="search" placeholder="Search for products">
                                    <button type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>