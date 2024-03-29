<?php
    require("db_connection.php");

    session_start();

    
        // if ($_SESSION['user_id'] == "") {
        //     header("location:cstmr_login.php");
        // }
        
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>NZ F&C | Edit Customer Details</title>
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
        

        <div class="cstmr_dshbrd-card">

            <?php
                        // echo "<pre>";
                        // print_r($_REQUEST);
                        // echo "</pre>";


                    // Searching for the record
                        $user_id = $_REQUEST['user_id'];

                    // building dynamic SQL Code
                        $sql = "select * from cstmr_logs where user_id=" . "'$user_id'";

                    // execute the SQL code
                        $rs = $mysqli->query($sql);

                        $record_count = mysqli_num_rows($rs);

                        if(mysqli_num_rows($rs) > 0){

                            $row = mysqli_fetch_assoc($rs);

                                // echo "<pre>";
                                // print_r($row);
                                // echo "</pre>";
            ?>

            <form action="cstmr_dshbrd_edit2.php" method="post" enctype="multipart/form-data">
            
                <div class="avatar-upload">
                    <div class="avatar-edit">
                        <input type='file' name="cstmr_picture" id="imageUpload" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload"></label>
                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url('images/cstmr_dp/<?php echo $row['cstmr_picture'];?>');">
                        </div>
                    </div>
                </div>
            <label class="cstmr_dshbrd-info">
                <span class="cstmr_dshbrd-info-1">Welcome Back</span>
                <span class="cstmr_dshbrd-info-2" style="padding-left: 0px; padding-right: 0px; border-radius: 10px;">
                    <input type="text" name="cstmr_name" id="cstmr_name" style="background-color: #FDEEEE; border: none; padding-left: 10px; padding-right: 10px; border-radius: 10px;" required="required" value="<?php echo $row['cstmr_name'];?>">
                </span>
            </label>
            <div class="cstmr_dshbrd-content-1" style="padding-left: 0px; padding-right: 0px;">
                <input type="hidden" name="user_id" value="<?php echo $row['user_id'];?>">
                <input type="text" name="user_id" id="user_id" style="background-color: #FDEEEE; border: none; padding-left: 17px; padding-right: 17px; border-radius: 12px;" value="<?php echo $row['user_id'];?>" disabled>
            </div>
            <div class="cstmr_dshbrd-content-2" style="padding-left: 0px; padding-right: 0px; margin-top: 30px">
            <span style="padding-left: 5px;">Enter Current Password<br></span>
                <input type="password" name="cstmr_current_pwd" style="background-color: #FDEEEE; border: none; padding-left: 15px; padding-right: 15px; border-radius: 10px;" placeholder="******" required>
        
            </div>
            <div class="cstmr_dshbrd-content-2" style="padding-left: 0px; padding-right: 0px;">
                <span style="padding-left: 5px;">Enter New Password<br></span>
                <input type="password" name="cstmr_new_pwd" style="background-color: #FDEEEE; border: none; padding-left: 15px; padding-right: 15px; border-radius: 10px;" placeholder="******" required>
            </div>
            <div class="cstmr_dshbrd-content-2-btn-grp text-center">
                <input class="cstmr_dshbrd-content-2-btn" type="submit" value="Save Edit">
            </div>
            
            </form>
        </div>

        <?php
                        }
                        else{
                    ?>

                            <div class="alert alert-danger pdtAddedAlert" role="alert">
                                <h4 class="alert-heading">Error Loading Record</h4>
                                <p>Please Try Again Later.</p>
                                <hr>
                                <a href="cstmr_dshbrd.php" class="homePdtbtn">Back</a>
                            </div>

                    <?php
                        }

                    ?>



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


        <script>
            const imageUpload = document.querySelector("#imageUpload");
            var imagePreview = "";

                imageUpload.addEventListener("change", function (){
                    const reader = new FileReader();
                    reader.addEventListener("load", () => {
                        uploadedImage = reader.result;
                        document.querySelector("#imagePreview").style.backgroundImage = `url(${uploadedImage})`;
                    });
                    reader.readAsDataURL(this.files[0]);
                })
        </script>

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