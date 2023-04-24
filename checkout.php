<?php

    session_start();
 require("db_connection.php");
 require("component.php");


 if (isset($_POST['order_btn'])) {
    $country = $_POST['country'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address_name = $_POST['address_name'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip_code = $_POST['zipcode'];
    $email = $_POST['email'];
    $phone = $_POST['phone_no'];
    $order_notes = $_POST['notes'];
    $total_amount = $_POST['total_amount'];
    $payment_method = $_POST['payment_method'];

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

                            $product_name[] = $row['title'] .'( ptd_id - '. $cartItem['ptd_id'] .', size - '. $cartItem['crt_size'] .', qty - '. $cartItem['crt_qty'] .' Price - '. $cartPrice .')';  

                            
                            
                            // echo $product_name;
                            
                            // 
                            
                        }
                    }
                }
    }    
        $total_product = implode(" | ",$product_name);
        $sql2 = "insert into `order` (country,first_name,last_name,address_name,address1,address2,city,state,zipcode,email,phone_no,notes,total_products,total_amount,payment_method) values(";
        $sql2 .= "'$country',";
        $sql2 .= "'$first_name',";
        $sql2 .= "'$last_name',";
        $sql2 .= "'$address_name',";
        $sql2 .= "'$address1',";
        $sql2 .= "'$address2',";
        $sql2 .= "'$city',";
        $sql2 .= "'$state',";
        $sql2 .= "'$zip_code',";
        $sql2 .= "'$email',";
        $sql2 .= "'$phone',";
        $sql2 .= "'$order_notes',";
        $sql2 .= "'$total_product',";
        $sql2 .= "$total_amount,";
        $sql2 .= "'$payment_method')";

        $z = $mysqli->query($sql2);

        if($z>0){
            echo "
                <div class='order-message-container'>
                <div class='message-container'>
                    <h3>Thank You For Shopping!</h3>
                    <div class='order-detail'>
                        <span>".$total_product."</span>
                        <span class='total'> total : Rs.".$total_amount."/-  </span>
                    </div>
                    <div class='customer-details'>
                        <p> Your Name : <span>".$first_name."</span> </p>
                        <p> Your Number : <span>".$phone."</span> </p>
                        <p> Your Email : <span>".$email."</span> </p>
                        <p> Your Address : <span>".$address1.", ".$address2.", ".$city.", ".$state.", ".$country." - ".$zip_code."</span> </p>
                        <p> Your Payment Method : <span>".$payment_method."</span> </p>
                        <p>(*Please Bank Transfer and Let the Team Know*)</p>
                    </div>
                        <a href='shop.php' class='btn btn-shpig'>continue shopping</a>
                </div>
                </div>
            ";

            unset($_SESSION['cart']);
        }


     
 }

    // print_r($_POST);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>NZ Fashion | Check Out</title>
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
                                <a href="index.html"><img alt="NZ Fashion Logo" src="images/nzlogosm.png"></a>
                            </div>
                            <div class="mobileMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <ul>
                                <li class="has-menu-items active"><a href="index.php">Home</a></li>
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
                                <li class="has-menu-items active"><a href="about.php">About Us</a></li>
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
                            <h2>Checkout</h2>
                            <div class="breadcrumbs">
                                <a href="index.php">HOME</a> &nbsp;/ &nbsp;<a href="#">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="comonSection">
            <div class="container">
                <div class="row">
                    <form action="checkout.php" method="post">
                    <div class="col-sm-6 checkoutForms">
                        <h4 class="comonHeading">Billing Address</h4>
                        <div class="col-lg-12 noPadding">
                            <label class="chek_label">Country *</label>
                            <select class="country_to_state country_select " disabled id="billing_country" name="country">
                                <option value="Sri Lanka" selected>Sri Lanka</option>
                                <input type="hidden" name="country" value="Sri Lanka">
                            </select>
                        </div>
                        <div class="col-lg-6 noPaddingLeft">
                            <label class="chek_label">First Name *</label>
                            <input type="text" name="first_name"/ required>
                        </div>
                        <div class="col-lg-6 noPaddingRight">
                            <label class="chek_label">Last Name *</label>
                            <input type="text" name="last_name"/ required>
                        </div>
                        <div class="col-lg-12 noPadding">
                            <label class="chek_label">Office / Home / Others</label>
                            <input type="text" name="address_name"/>
                        </div>
                        <div class="col-lg-12 noPadding">
                            <label class="chek_label">Address 1 *</label>
                            <input type="text" name="address1" placeholder="Street Addreess"/ required>
                        </div>
                        <div class="col-lg-12 noPadding">
                            <label class="chek_label">Address 2 (Optional)</label>
                            <input type="text" name="address2" placeholder="Apartment, suite, unit, etc..."/>
                        </div>
                        <div class="col-lg-12 noPadding">
                            <label class="chek_label">City / Town *</label>
                            <input type="text" name="city"/ required>
                        </div>
                        <div class="col-lg-6 noPaddingLeft">
                            <label class="chek_label">State *</label>
                            <input type="text" name="state"/ required>
                        </div>
                        <div class="col-lg-6 noPaddingRight">
                            <label class="chek_label">Pincode / zip *</label>
                            <input type="text" name="zipcode"/ required>
                        </div>
                        <div class="col-lg-12 noPadding">
                            <label class="chek_label">Email Address *</label>
                            <input type="text" name="email"/ required>
                        </div>
                        <div class="col-lg-12 noPadding">
                            <label class="chek_label">Phone Number *</label>
                            <input type="text" name="phone_no"/ required>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 noPadding">
                            <textarea name="notes" placeholder="OTHER NOTES..."></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h3 class="comonHeading">Your Order</h3>
                        <div id="order_review" class="woocommerce-checkout-review-order">
                            <div class="orderbg">
                                <table class="shop_table woocommerce-checkout-review-order-table">
                                    <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                    </thead>

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

                                                                    
                                                                    
                                                                    checkOutPtdData($row['title'], $cartItem['crt_size'], $cartItem['crt_qty'], $totalPrice);
                                                                    
                                                                }
                                                            }
                                                        }
                                            }    

                                        ?>
                                    
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td><span class="amount">Rs.<?php echo $subTotal ?></span></td>
                                        </tr>
                                        <tr class="cart-subtotal">
                                            <th>Shipping</th>
                                            <th>Free Shipping</th>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total Order</th>
                                            <td><span class="amount">Rs.<?php echo $subTotal ?></span> </td>
                                            <input type="hidden" name="total_amount" value="<?php echo $subTotal ?>">
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="orderbg mar30">
                                <div id="payment" class="woocommerce-checkout-payment">
                                    <ul class="wc_payment_methods payment_methods methods">
                                        <li class="wc_payment_method payment_method_bacs">
                                            <input type="radio" id="payment_method_bacs" class="input-radio" name="payment_method" value="bacs" checked="checked">
                                            <label for="payment_method_bacs">Direct Bank Transfer</label>
                                            <input type="hidden" name="payment_method" value="Bank Transfer">
                                            <div  class="payment_box payment_method_bacs visibales">
                                                <p>
                                                    Make your payment directly into our bank account. Please use your 
                                                    Order ID as the payment reference. Your order wont be shipped 
                                                    until the funds have cleared in our account.
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="vol_btn vol_btn_bg" name="order_btn">PLACE YOUR ORDER<i class="flaticon-arrows-3"></i></button>
                            </div>
                        </div>
                    </div>
                    </form>
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