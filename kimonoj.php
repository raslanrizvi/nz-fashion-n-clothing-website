<?php 

    require("db_connection.php");

    require("component.php");

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>NZ F&C | Kimono Jacket</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Include All CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="css/animate.css"/>
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
        <link rel="stylesheet" type="text/css" href="css/strok_gap_icon.css"/>
        <link rel="stylesheet" type="text/css" href="css/settings.css"/>
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css"/>
        <link rel="stylesheet" type="text/css" href="css/preset.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/responsive.css"/>
        <!-- End Include All CSS -->

        <!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="images/favicon.png">
        <!-- Favicon Icon -->

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]--> 
    </head>
    <body>
        <div class="preloader">
            <div class="la-ball-scale-multiple la-2x">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <section class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-5">
                        <div class="topMenusHolder">
                            <ul class="topMenus clearfix poppins">
                                <li><a href="cstmr_login.php"><i class="frontIcon icon-Exit"></i>
                                <?php
                                    if (isset($_SESSION['user_id'])) {
                                        echo "Sign Out";
                                    }
                                    else {
                                        echo "Sign In";
                                    }
                                ?>
                                </a></li>
                                <li><a data-toggle="collapse" data-target="#accountTogg">
                                <?php
                                    if (isset($_SESSION['cstmr_name'])) {
                                        echo $_SESSION['cstmr_name'];
                                    }
                                    else {
                                        echo "My Account";
                                    }
                                ?>  
                                <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu collapse" id="accountTogg">
                                        <li><a href="cstmr_dshbrd.php">Account Details</a></li>
                                        <li><a href="cart.php">My cart</a></li>
                                        <li><a href="cstmr_login.php">
                                        <?php
                                            if (isset($_SESSION['user_id'])) {
                                                echo "Sign Out";
                                            }
                                            else {
                                                echo "Sign In";
                                            }
                                        ?>  
                                        </a></li>
                                    </ul>
                                </li>
                                <li><a href="cart.php"><i class="frontIcon icon-ShoppingCart"></i>
                                    <?php
                                        if (isset($_SESSION['cart'])) {
                                            $count = count($_SESSION['cart']);
                                            echo $count;
                                        }
                                        else {
                                            echo "0";
                                        }
                                    ?>
                                 Items</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-2">
                        <div class="logo text-center">
                            <a href="index.php"><img src="images/nzlogosm.png" alt="NZ LOGO"/></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-5">
                        <div class="topLanguangeSearch clearfix">
                            <form action="cstmr_srch_prdts.php" method="post">
                                <option type="hidden" name="sortBy" value="none"></option>
                                <input type="text" name="cstmr_srch_prdts" id="cstmr_srch_prdts" placeholder="Search"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <header class="header" id="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="mainMenu poppins">
                            <div class="logofixedHeader text-center">
                                <a href="index.php"><img alt="NZFashion" src="images/nzlogosm.png"></a>
                            </div>
                            <div class="mobileMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <ul>
                                <li class="has-menu-items"><a href="index.php">Home</a></li>
                                <li class="has-menu-items active"><a href="shop.php">shop</a>
                                    <ul class="sub-menu">
                                        <li class="subMentTitle">SHOPPAGES</li>
                                        <li><a class="active" href="kimonoj.php">Kimono Jacket</a></li>
                                        <li><a href="longwearj.php">Longwear Jackets</a></li>
                                        <li><a href="streetwearp.php">Streetwear Pants</a></li>
                                        <li><a href="sneakers.php">Sneakers</a></li>
                                        <li><a href="accessories.php">Accessories</a></li>
                                        <li><a href="cart.php">Cart page</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="contact_us.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <section class="pageTitleSection pageTitleSection-shop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pageTitleContent">
                            <h2>Shop</h2>
                            <div class="breadcrumbs">
                                <a href="index.php">HOME</a> &nbsp;/ &nbsp;<a href="#">shop</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="comonSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-sm-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="shop_heading">
                                    <h2>Product List</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row shopAccessRow">
                            <div class="col-lg-8">
                                <div class="shopAccessLefts">
                                    <!-- <a href="#" class="active"><i class="fa fa-th-large"></i>Grid</a>
                                    <a href="#"><i class="fa fa-th-list"></i>list</a> -->
                                    <span>Showing Results of all Products available</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <?php

                                $sql = "SELECT * FROM product WHERE ctgy = 'KIMONO JACKET' ORDER BY RAND() LIMIT 12";
                                
                                    $rs = $mysqli->query($sql);

                                        if (mysqli_num_rows($rs)>0) {
                                                    // Can Display the records
                                                    

                                                    

                                            while ($row = mysqli_fetch_assoc($rs)) {

                                                allProductsComponent($row['qty'], $row['new_arrivals'], $row['sale'], $row['picture1'], $row['title'], $row['ctgy'], $row['price'], $row['sale_price'], $row['ptd_id']);

                                            }
                                        }
                                        else {
                                            echo "No Products Found";
                                        }

                            ?>




                        </div>
                        <div class="row mtop32">
                            <div class="col-lg-12">
                                <div class="sop_navigation text-center">
                                    <a href="#" class="current">1</a>
                                    <a href="kimonoj.php" class="next"><i class="flaticon-arrows-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 shopsidebar">
                        <aside class="widget wow fadeInUp" data-wow-duration="700ms" data-wow-delay="450ms">
                            <h3 class="widgetTitle">Sale Products</h3>
                            <div class="widgetBody">
                                <div class="topRatedProducts">
                                    <!-- <img src="" style="" alt=""> -->
                                    
                                <?php

                                        $sql2 = "SELECT * FROM product WHERE ctgy = 'KIMONO JACKET' AND  sale = 'on' ORDER BY RAND() LIMIT 3";

                                            $rs2 = $mysqli->query($sql2);

                                                if (mysqli_num_rows($rs2)>0) {
                                                            // Can Display the records
                                                    while ($row2 = mysqli_fetch_assoc($rs2)) {

                                                        miniSaleElement($row2['picture1'], $row2['title'], $row2['sale_price'], $row2['price']);

                                                    }
                                                }
                                                else {
                                                    echo "No Products Found";
                                                }

                                ?> 
                                    
                                </div>
                            </div>
                        </aside>
                        <!-- <aside class="widget tw_imgs  wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                            <div class="widgetBody">
                                <div class="img_widgets">
                                    <img src="images/shop1/promo.png" alt=""/>
                                </div>
                            </div>
                        </aside> -->
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <aside class="widget">
                            <div class="textwidget">
                                <img class="footer2Logo" src="images/nzlogo.png" style="width: 70%;" alt=""/>
                                <div class="footerDesc">
                                    NZ Fashion and Clothing, your go-to destination for authentic Japanese-inspired men's fashion
                                </div>
                                <div class="footerSocials2">
                                    <a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i>
                                    </a><a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-instagram"></i>
                                    </a><a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-2 col-sm-6 paddLeft11">
                        <aside class="widget">
                            <h3 class="widgetTitle">Informations</h3>
                            <ul>
                                <li><a href="cstmr_dshbrd.php">My Account</a></li>
                                <li><a href="s">Customer Service</a></li>
                                <li><a href="#">My Vouchers</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="clearfix hidden-lg hidden-md hidden-xs"></div>
                    <div class="col-lg-3 col-sm-6 paddLeft70">
                        <aside class="widget">
                            <h3 class="widgetTitle">Quick Links</h3>
                            <ul>
                                <li><a href="about.php">About us</a></li>
                                <li><a href="contact_us.php">Contact us</a></li>
                                <li><a href="#">Order History</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-sm-6 noPaddingLeft">
                        <aside class="widget">
                            <h3 class="widgetTitle">Newsletter</h3>
                            <div class="newslatters">
                                <form method="post" action="#" id="subscribe">
                                    <input type="text" name="name" placeholder="Your Name" id="sub_name"/>
                                    <input type="email" name="email" placeholder="Your Email" id="sub_email"/>
                                    <button type="submit" name="submit" id="sub_submit">Submit</button>
                                </form>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </footer>
        <section class="copyrightSec">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="copyDesc">Copyrights &COPY; 2023 NZ F&C. All Rights Reserved</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="payment2">
                            <a href="#"><i class="fa fa-cc-visa"></i></a><a href="#"><i class="fa fa-cc-discover"></i>
                            </a><a href="#"><i class="fa fa-cc-paypal"></i></a><a href="#"><i class="fa fa-cc-mastercard"></i>
                            </a><a href="#"><i class="fa fa-cc-amex"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Include All JS -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/mixer.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <script type="text/javascript" src="js/owl.carousel.js"></script>
        <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="js/jquery.plugin.min.js"></script>
        <script type="text/javascript" src="js/jquery.countdown.min.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/theme.js"></script>
    </body>
</html>