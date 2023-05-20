<?php
    require("db_connection.php");
    require("component.php");

    $ptd_id = $_REQUEST['ptd_id'];

    $sql3 = "select * from product where ptd_id = $ptd_id";
    $rs3 = $mysqli->query($sql3);
    $row3 = mysqli_fetch_assoc($rs3);
    $title = $row3['title'];

    // echo $title;

    session_start();

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ptd_id']) && isset($_POST['crt_size'])) {

    // Get the product ID and size from the form
    $ptd_id = $_POST['ptd_id'];
    $crt_size = isset($_POST['crt_size']) ? $_POST['crt_size'] : '';
    $crt_qty = $_POST['crt_qty'];

            


    // Initialize the cart if it does not exist
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Check if the product already exists in the cart
    foreach ($_SESSION['cart'] as $item) {
        if ($item['ptd_id'] == $ptd_id && $item['crt_size'] == $crt_size) {
            // Product already exists in cart, do not add it again
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'shop_single.php?ptd_id=$ptd_id'</script>";
            
            exit();
        }
    }

    // Add the product to the cart
    $_SESSION['cart'][] = array(
        'ptd_id' => $ptd_id,
        'crt_size' => $crt_size,
        'crt_qty' => $crt_qty
        // add more product information as needed\
    );
    // print_r($_SESSION['cart']);

    // Redirect to the product page
    header('Location: shop_single.php?ptd_id=' . $ptd_id);
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>NZ Fashion | <?php echo $title ?></title>
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
                </div>
            </div>
        </section>
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
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="contact_us.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <section class="comonSection noPaddingBottom">
            <div class="container">
                <div class="row">
                
                <?php

                    // Searching for the record
                    $ptd_id = $_REQUEST['ptd_id'];
                        // print_r($_REQUEST);

                    // building dynamic SQL Code
                        $sql = "SELECT * FROM product WHERE ptd_id=$ptd_id";

                    // execute the SQL code
                        $rs = $mysqli->query($sql);

                        $record_count = mysqli_num_rows($rs);

                        if(mysqli_num_rows($rs) > 0){

                            $row = mysqli_fetch_assoc($rs);

                                
                                $ctgy = $row['ctgy'];

                            if ($row['sale'] == "on") {
                                $ptd_price = $row['sale_price'];
                            }
                            else {
                                $ptd_price = $row['price'];
                            }

                ?>
                    
                    <div class="col-lg-6">
                    <form action="shop_single.php?ptd_id=<?php echo $row['ptd_id']; ?>" method="post">
                    <div id="shopCaro" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators singShopTabnav">
                            <li data-target="#shopCaro" data-slide-to="1" class="active">
                                <img src="images/products/thumbnail/<?php echo $row['picture1']; ?>" alt="">
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item shopBimg active">
                                <img src="images/products/large/<?php echo $row['picture1']; ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 noPaddingLeft">
                    <div class="singleProInfo">
                        <div class="productinfoTop">
                            <h2 name="crt_title" class="productSiTitle"><?php echo $row['title']; ?></h2>
                            <p name="crt_price" class="prices2">Rs.<?php echo $ptd_price ?></p>
                        </div>
                    </div>
                    <div class="sinShopCont">
                        <p>
                            <?php echo $row['description']; ?>
                        </p>
                    </div>
                    <h3 class="stokPrduct">Available: <?php echo $row['qty'] ?> items Left in Stock</h3>
                    <div class="ctyandColor">
                        <div class="quantityW">
                            <h4>QTY:</h4>
                            <div class="quantity">
                                <button class="qtyBtn btnMinus">-</button>
                                <input type="text" name="crt_qty" value="1" title="Qty" class="input-text qty text carqty">
                                <button class="qtyBtn btnPlus">+</button>
                            </div>
                        </div>
                        <div class="colorW">
                            <h4>SELECT Size</h4>
                            <div class="productColor form-check form-check-inline">
                                <?php
                                
                                if ($row['size_xs'] == "on") {
                                    echo '<input class="form-check-input" type="radio" name="crt_size" value="XS" required>';
                                    echo '<label class="form-check-label" for="XS">XS</label>';
                                  }
                                  else {
                                    echo '<input class="form-check-input" disabled style="cursor: default;" type="radio" name="crt_size" value="XS" required>';
                                    echo '<label class="custom-control-label" for="XS">XS</label>';
                                  }
                                  
                                  if ($row['size_s'] == "on") {
                                    echo '<input class="form-check-input" type="radio" name="crt_size" value="S">';
                                    echo '<label class="form-check-label" for="S">S</label>';
                                  }
                                  else {
                                    echo '<input class="form-check-input" disabled style="cursor: default;" type="radio" name="crt_size" value="S">';
                                    echo '<label class="form-check-label" for="S">S</label>';
                                  }

                                  if ($row['size_m'] == "on") {
                                    echo '<input class="form-check-input" type="radio" name="crt_size" value="M">';
                                    echo '<label class="form-check-label" for="M">M</label>';
                                  }
                                  else {
                                    echo '<input class="form-check-input" disabled style="cursor: default;" type="radio" name="crt_size" value="M">';
                                    echo '<label class="form-check-label" for="M">M</label>';
                                  }

                                  if ($row['size_l'] == "on") {
                                    echo '<input type="radio" name="crt_size" value="L">';
                                    echo '<label class="form-check-label" for="L">L</label>';
                                  }
                                  else {
                                    echo '<input class="form-check-input" disabled style="cursor: default;" type="radio" name="crt_size" value="L">';
                                    echo '<label class="form-check-label" for="L">L</label>';
                                  }

                                  if ($row['size_xl'] == "on") {
                                    echo '<input class="form-check-input" type="radio" name="crt_size" value="XL">';
                                    echo '<label class="form-check-label" for="XL">XL</label>';
                                  }
                                  else {
                                    echo '<input class="form-check-input" disabled style="cursor: default;" type="radio" name="crt_size" value="XL">';
                                    echo '<label class="form-check-label" for="XL">XL</label>';
                                  }

                                  if ($row['size_xxl'] == "on") {
                                    echo '<input class="form-check-input" type="radio" name="crt_size" value="XXL">';
                                    echo '<label class="form-check-label" for="XXL">XXL</label>';
                                  }
                                  else {
                                    echo '<input class="form-check-input" disabled style="cursor: default;" type="radio" name="crt_size" value="XXL">';
                                    echo '<label class="form-check-label" for="XXL">XXL</label>';
                                  }

                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="cartButtons">
                        <button type="submit" name="add" class="vol_btn vol_btn_bg">ADD TO CART<i class="flaticon-arrows-3"></i></button>
                        <input type="hidden" name="ptd_id" value='<?php echo $ptd_id?>'>
                        <input type="hidden" name="title" value='<?php echo $row['title'] ?>'>
                        
                    </div>
                </div>
                </form>
                <?php
                    }
                ?>
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
                    <?php

                    

                    $sql2 = "select * from product where ctgy = '$ctgy' and ptd_id != '$ptd_id' order by rand() limit 3";

                    // execute the SQL code
                    $rs2 = $mysqli->query($sql2);

                    

                    if(mysqli_num_rows($rs2) > 0){

                        while ($row2 = mysqli_fetch_assoc($rs2)) {
                            allProductsComponent($row2['qty'], $row2['new_arrivals'], $row2['sale'], $row2['picture1'], $row2['title'], $row2['ctgy'], $row2['price'], $row2['sale_price'], $row2['ptd_id']);
                        }
                    }
                    else{
                        echo "No Products Found";
                    }
                    ?>
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