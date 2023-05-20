<?php

// Start the session
session_start();

    require("db_connection.php");
    require("component.php");


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>NZ Fashion | Cart</title>
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
        <header class="header" id="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="mainMenu poppins">
                            <div class="logofixedHeader text-center">
                                <a href="index.php"><img alt="Volta" src="images/nzlogosm.png"></a>
                            </div>
                            <div class="mobileMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <ul>
                                <li class="has-menu-items"><a href="index.php">Home</a></li>
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
                                <li class="has-menu-items"><a href="about.php">About Us</a></li>
                                <li class="has-menu-items"><a href="contact_us.php">Contact</a></li>
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
                                <a href="index.php">HOME</a> &nbsp;/ &nbsp;<a href="#">Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="comonSection cartSec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="cartHeadings">Shopping Cart Summary</h3>
                    </div>
                    <div class="col-lg-12 woocommerce">
                        <form action="#" method="post">
                            <table class="shop_table shop_table_responsive cart cart_table">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">IMAGES</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-size">Size</th>
                                        <th class="product-qty">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php


                                            $subTotal = 0;
                                        if (isset($_SESSION['cart'])) {
                                            $cartItems = $_SESSION['cart'];

                                           
                                                $rs = getData();
                                                    while ($row = mysqli_fetch_assoc($rs)) {
                                                        foreach ($cartItems as $cartItem) {
                                                            if ($row['ptd_id'] == $cartItem['ptd_id']) {
                                                                $cartPrice = $row['sale'] == "on" ? $row['sale_price'] : $row['price'];
                                                                $totalPrice = $cartPrice * $cartItem['crt_qty'];
                                                                $subTotal += (int)$totalPrice;
                                                                
                                                                cartElement($row['picture1'], $row['title'], $cartPrice, $totalPrice, $cartItem['crt_qty'], $cartItem['crt_size'], $cartItem['ptd_id'], $subTotal);
                                                                
                                                            }
                                                        }
                                                    }
                                                
                                                ?>
                                                    <tr>
                                                        <td class="actions" colspan="6">
                                                            <button id="clear-cart-btn" class="button update_cart vol_btn vol_btn_bg" style="background-color: #E04641;">Clear Cart</button>
                                                            <a href="shop.php" class="button cont_shop vol_btn">CONTINUE SHOPPING<i class="flaticon-arrows-3"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php
                                        }
                                        else {
                                            echo "<h5>Cart is Empty</h5>";
                                        }


                                    ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-7 col-xs-12 pull-right noPaddingLeft">
                        <div class="cart_totals calculated_shipping">
                            <h2>Cart Totals</h2>
                            <table class="shop_table shop_table_responsive">
                                <tbody><tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td data-title="Subtotal"><span class="amount">Rs.<?php echo $subTotal?></span></td>
                                    </tr>
                                    <tr class="shipping">
                                        <th>Shipping</th>
                                        <td data-title="Shipping">
                                            <ul id="shipping_method">
                                                <li>
                                                    <input type="radio" name="shipping_method[free]" data-index="0" id="shipping_method_0_free_shipping" value="free_shipping" class="shipping_method" checked="checked">
                                                    <label for="shipping_method_0_free_shipping">Free Shipping</label>					
                                                </li>
                                                <li>
                                                    <input type="radio" name="shipping_method[pickup]"  data-index="0" id="shipping_method_0_local_pickup" value="local_pickup" class="shipping_method">
                                                    <label for="shipping_method_0_local_pickup">Store Pickup</label>					
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td data-title="Total"><strong><span class="amount">Rs.<?php echo $subTotal?></span></strong> </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="<?php echo (isset($_SESSION['cart'])) ? 'checkout.php' : '#'; ?>" class="button cont_shop vol_btn" style="border-radius: 20px 20px 0 20px;">CheckOut<i class="flaticon-arrows-3"></i></a>
                            
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

        <!-- <script>
            document.getElementById("clear-cart-btn").addEventListener("click", function() {
                // Remove all items from the cart session variable
                
                // unset($_SESSION['cart']); 
                

                // Reload the cart page
                window.location.href = "cart.php";
            });
        </script> -->

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