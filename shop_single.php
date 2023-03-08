<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Volta : Minimal Shopping HTML5 Template</title>
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
                                <li><a href="#"><i class="frontIcon icon-Exit"></i>Register</a></li>
                                <li><a href="#"  data-toggle="collapse" data-target="#accountTogg">My Account <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu collapse" id="accountTogg">
                                        <li><a href="#">My wishlis</a></li>
                                        <li><a href="#">My cart</a></li>
                                        <li><a href="#">sing in</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="frontIcon icon-ShoppingCart"></i>5 Items</a></li>
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
                            <form method="post">
                                <input type="text" name="s" id="s" placeholder="Search"/>
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
                                <li class="has-menu-items"><a href="shop.html">shop</a>
                                    <ul class="sub-menu">
                                        <li class="subMentTitle">SHOPPAGES</li>
                                        <li><a href="kimonoj.html">Kimono Jacket</a></li>
                                        <li><a href="longwearj.html">Longwear Jackets</a></li>
                                        <li><a href="streetwearp.html">Streetwear Pants</a></li>
                                        <li><a href="sneakers.html">Sneakers</a></li>
                                        <li><a href="accessories.html">Accessories</a></li>
                                        <li><a href="cart.html">Cart page</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="contact_us.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <section class="pageTitleSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pageTitleContent">
                            <h2>Blog</h2>
                            <div class="breadcrumbs">
                                <a href="index.html">HOME</a> &nbsp;/ &nbsp;<a href="#">Blog</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="comonSection noPaddingBottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div id="shopCaro" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators singShopTabnav">
                                <li data-target="#shopCaro" data-slide-to="0">
                                    <img src="images/shop_single/t1.jpg" alt="">
                                </li>
                                <li data-target="#shopCaro" data-slide-to="1" class="active">
                                    <img src="images/shop_single/t2.jpg" alt="">
                                </li>
                                <li data-target="#shopCaro" data-slide-to="2">
                                    <img src="images/shop_single/t3.jpg" alt="">
                                </li>
                                <li data-target="#shopCaro" data-slide-to="3">
                                    <img src="images/shop_single/t4.jpg" alt="">
                                </li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item shopBimg active">
                                    <img src="images/shop_single/1.jpg" alt="">
                                </div>
                                <div class="item shopBimg">
                                    <img src="images/shop_single/1.jpg" alt="">
                                </div>
                                <div class="item shopBimg">
                                    <img src="images/shop_single/1.jpg" alt="">
                                </div>
                                <div class="item shopBimg">
                                    <img src="images/shop_single/1.jpg" alt="">
                                </div>
                                <div class="item shopBimg">
                                    <img src="images/shop_single/1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 noPaddingLeft">
                        <div class="singleProInfo">
                            <div class="productinfoTop">
                                <h2 class="productSiTitle">Post Mid-Volume Backpack</h2>
                                <div class="singShopRatting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-full"></i>
                                    <span>(4.7/5 Ratings)</span>
                                </div>
                                <p class="prices2">&nbsp;$89.00</p>
                            </div>
                        </div>
                        <div class="sinShopCont">
                            <p>
                                The Love Boat soon will be making another run the love boat promises something for 
                                everyone one two three four five six seven eight Sclemeel schlemazel hasenfeffer 
                                incorporated the weather started getting rough the tiny ship was tossed if not for
                                the courage of the fearless crew the minnow would be lost the minnow would be lost.
                            </p>
                        </div>
                        <h3 class="stokPrduct">Available: 15 items Left in Stock</h3>
                        <div class="ctyandColor">
                            <div class="quantityW">
                                <h4>QTY:</h4>
                                <div class="quantity">
                                    <button class="qtyBtn btnMinus">-</button>
                                    <input type="text" name="qty" value="1" title="Qty" class="input-text qty text carqty">
                                    <button class="qtyBtn btnPlus">+</button>
                                </div>
                            </div>
                            <div class="colorW">
                                <h4>SELECT COLOR:</h4>
                                <div class="productColor">
                                    <a class="SandyBrown" href="#"></a>
                                    <a class="Flamingo" href="#"></a>
                                    <a class="DarkGreen" href="#"></a>
                                    <a class="Wattle" href="#"></a>
                                </div>
                            </div>
                        </div>
                        <div class="cartButtons">
                            <a href="#" class="vol_btn vol_btn_bg">ADD TO CART<i class="flaticon-arrows-3"></i></a>
                            <a href="#" class="vol_btn vol_border"><i class="fa fa-heart-o"></i></a>
                            <a href="#" class="vol_btn vol_border"><i class="exchange"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="seperator"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="relatedProSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sectionTitle text-center">
                            <h2>RELATED PRODUCTS</h2>
                            <div class="titleBars"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6  wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                        <div class="singleProduct01 text-center">
                            <div class="labelsPro poppins newPro">New</div>
                            <div class="labelsPro poppins salePro">Sale</div>
                            <div class="productThumb01">
                                <img alt="" src="images/home2/s1.png">
                                <div class="productHover01">
                                    <a class="vol_btn vol_btn_bg" href="#">Add to cart<i class="flaticon-arrows-3"></i></a>
                                </div>
                            </div>
                            <div class="productDesc01">
                                <h5><a class="poppins" href="#">Dawson Backpack</a></h5>
                                <p class="cats"><a href="#">Accessories</a></p>
                                <p class="prices"><del>$69.00</del> $65.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6  wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                        <div class="singleProduct01 text-center">
                            <div class="productThumb01">
                                <img alt="" src="images/home2/s2.png">
                                <div class="productHover01">
                                    <a class="vol_btn vol_btn_bg" href="#">Add to cart<i class="flaticon-arrows-3"></i></a>
                                </div>
                            </div>
                            <div class="productDesc01">
                                <h5><a class="poppins" href="#">Vila Printed Tie Neck Dress</a></h5>
                                <p class="cats"><a href="#">fashion</a></p>
                                <p class="prices">$75.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6  wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                        <div class="singleProduct01 text-center">
                            <div class="labelsPro poppins newPro">New</div>
                            <div class="labelsPro poppins salePro">Sale</div>
                            <div class="productThumb01">
                                <img alt="" src="images/home2/s3.png">
                                <div class="productHover01">
                                    <a class="vol_btn vol_btn_bg" href="#">Add to cart<i class="flaticon-arrows-3"></i></a>
                                </div>
                            </div>
                            <div class="productDesc01">
                                <h5><a class="poppins" href="#">Fitch Woven Saddle Bag</a></h5>
                                <p class="cats"><a href="#">Accessories</a></p>
                                <p class="prices"><del>$64.00</del> $63.00</p>
                            </div>
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
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js" ></script>
        <script type="text/javascript" src="js/gmaps.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/theme.js"></script>
    </body>
</html>