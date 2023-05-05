<?php
    require("db_connection.php");
    require("component.php");

    session_start();

    

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>NZ F&C | Home</title>
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
                            <a href="index.html"><img src="images/nzlogosm.png" alt="NZ LOGO"/></a>
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
                                <a href="index.html"><img alt="Volta" src="images/nzlogosm.png"></a>
                            </div>
                            <div class="mobileMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <ul>
                                <li class="has-menu-items active"><a href="#">Home</a></li>
                                <li class="has-menu-items"><a href="shop.php">shop</a>
                                    <ul class="sub-menu">
                                        <li class="subMentTitle">SHOPPAGES</li>
                                        <li><a href="kimonoj.php">Kimono Jacket</a></li>
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
        <section class="banner2">
            <div class="revSlider">
                <ul>
                    <li class="slider1" data-transition="boxfade" data-slotamount="7" data-masterspeed="1000" >
                        <div class="tp-caption sfb"
                             data-x="left"
                             data-y="top"
                             data-hoffset="0"
                             data-voffset="-100"
                             data-speed="1000"
                             data-start="800"
                             data-easing="easeInOutCirc">
                            <div class="sliderImgs">
                                <img src="images/homepage/homepagebanner1.png" alt=""/>
                            </div>
                        </div>
                        <div class="tp-caption sfb"
                             data-x="center"
                             data-y="center"
                             data-hoffset="250"
                             data-voffset="-95"
                             data-speed="1000"
                             data-start="800"
                             data-easing="easeInQuad">
                            <h6 class="sl2_h6 playfair">The Japanese Peak</h6>
                        </div>
                        <div class="tp-caption sfb"
                             data-x="right"
                             data-y="center"
                             data-hoffset="0"
                             data-voffset="-45"
                             data-speed="1000"
                             data-start="800"
                             data-easing="easeInQuad">
                            <h1 class="sl_h raleway">Japanese FASHION</h1>
                        </div>
                        <div class="tp-caption fade"
                             data-x="center"
                             data-y="center"
                             data-hoffset="220"
                             data-voffset="25"
                             data-speed="1000"
                             data-start="800"
                             data-easing="easeInQuint">
                            <h5 class="sl2_x">x</h5>
                        </div>
                        <div class="tp-caption sfb"
                             data-x="right"
                             data-y="center"
                             data-hoffset="0"
                             data-voffset="86"
                             data-speed="1000"
                             data-start="800"
                             data-easing="easeOutBounce">
                            <div class="slbutons">
                                <a href="#" class="vol_btn poppins">VIEW COLLECTION<i class="flaticon-arrows-3"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="slider2" data-transition="boxfade" data-slotamount="7" data-masterspeed="1000" >
                        <div class="tp-caption sfb"
                             data-x="center"
                             data-y="top"
                             data-hoffset="0"
                             data-voffset="-100"
                             data-speed="1000"
                             data-start="800"
                             data-easing="easeInOutCirc">
                            <div class="sliderImgs">
                                <img src="images/homepage/homepagebanner2.png" alt=""/>
                            </div>
                        </div>
                    </li>
                    <li class="slider3" data-transition="boxfade" data-slotamount="7" data-masterspeed="1000" >
                        <img src="images/homepage/homepagebanner3full.png" alt=""/>
                    </li>
                </ul>
            </div>
        </section>
        <section class="comonSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sectionTitle text-center">
                            <h2>About NZ Fashion & Clothing</h2>
                            <div class="titleBars"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 aboutCall">
                        <div class="aboutMinimal">
                            <div class="row">
                                <div class="col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                                    <div class="aboutImg">
                                        <img src="images/homepage/whoweare.png" alt=""/>
                                    </div>
                                </div>
                                <div class="col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                                    <div class="aboutDesc">
                                        <h4 class="poppins">Who We Are</h4>
                                        <p>
                                            Welcome to NZ Fashion and Clothing, your go-to destination for authentic Japanese-inspired men's fashion. We are proud to offer a wide range of clothing, accessories, and footwear that reflect the timeless elegance and unique style of Japanese fashion. At NZ Fashion and Clothing, we believe that fashion is more than just clothing. It's an expression of individuality, a reflection of personality, and a celebration of culture. That's why we've curated a collection of men's clothing that combines classic Japanese design with modern style, to create a look that is both unique and stylish.
                                        </p>
                                        <a  href="shop.html" class="vol_btn">View Products<i class="flaticon-arrows-3"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="normalHr noMarginBottom"></div>
                </div>
            </div>
        </div>
        <section class="comonSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                        <div class="catImgs">
                            <a href="longwearj.php">
                                <img src="images/homepage/longwear.png" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                        <div class="catHints">
                            <a href="longwearj.php" class="catOne poppins">Long Wear</a>
                            <a href="kimonoj.php" class="catTwo poppins">Kimono</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                        <div class="catImgs">
                            <a href="kimonoj.php">
                                <img src="images/homepage/kimono.png" alt=""/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="comonSection noPaddingTop newArrivals">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sectionTitle text-center">
                            <h2>New Arrivals</h2>
                            <div class="titleBars"></div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php

                                $sql = "SELECT * FROM product WHERE new_arrivals = 'on' ORDER BY RAND() LIMIT 6";

                                // execute the SQL code
                                $rs = $mysqli->query($sql);



                                if(mysqli_num_rows($rs) > 0){

                                    while ($row = mysqli_fetch_assoc($rs)) {
                                        allProductsComponent($row['qty'], $row['new_arrivals'], $row['sale'], $row['picture1'], $row['title'], $row['ctgy'], $row['price'], $row['sale_price'], $row['ptd_id']);
                                    }
                                }
                                else{
                                    echo "No New Products Found";
                                }
                    

                    ?>
                </div>
                <div class="row marginTop10px">
                    <div class="col-lg-12 text-center">
                        <a href="shop.php" class="vol_btn">View all products<i class="flaticon-arrows-3"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="comonSection noPaddingTop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dailyDeals text-right">
                            <img src="images/homepage/sale.png" alt=""/>
                            <div class="dealsContent">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="deals poppins">
                                            <h2>Treat Your Valentine</h2>
                                            <h4>GET FLAT 30% OFFER</h4>
                                            <p>GREAT OFFER FOR On Watches & Caps</p>
                                            <div class="conuntDeals"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="comonSection noPaddingTop">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                        <div class="singleNotice">
                            <img src="images/home2/i1.png" alt=""/>
                            <h5>FASTER DELIVERY WORLDWIDE</h5>
                            <p>Guranteed Delivery with 7 Days</p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                        <div class="singleNotice">
                            <img src="images/home2/i2.png" alt=""/>
                            <h5>EASY RETURN & 24/7 SUPPORT</h5>
                            <p>Best Service by our Executives</p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                        <div class="singleNotice">
                            <img src="images/home2/i3.png" alt=""/>
                            <h5>FREE SHIPPING SERVICE</h5>
                            <p>Free Delivery Order over $100</p>
                        </div>
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
                                    NZ Fashion and Clothing, your go-to destination for authentic Japanese-inspired men's fashion.
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
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Customer Service</a></li>
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
                                <li><a href="about.html">About us</a></li>
                                <li><a href="contact_us.html">Contact us</a></li>
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