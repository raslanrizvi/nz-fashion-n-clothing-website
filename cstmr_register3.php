<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" href="css/strok_gap_icon.css"/>
    <link rel="stylesheet" type="text/css" href="css/settings.css"/>
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" href="css/preset.css"/>
    <link rel="stylesheet" type="text/css" href="css/cstmr_login.css"/>
    <link rel="stylesheet" type="text/css" href="css/responsive.css"/>
    <!-- End Styles -->

    <title>NZ Customer Registered</title>

    <!-- Favicon Icon -->
    <link rel="icon"  type="image/png" href="images/favicon.png">
    <!-- Favicon Icon -->


</head>
<body>

    <div class="dshbrdLogin-wrp">
        <!-- <div class="container"> -->
            <!-- <div class="row"> -->
                <div class="main">  	
                    <input type="checkbox" id="chk" aria-hidden="true">
            
                        <div class="login">

                        <?php

                            if($_REQUEST['status']=="pass"){
                            ?>

                            <div class="alert alert-success pdtAddedAlert" role="alert">
                                    <h4 class="alert-heading">Account Created</h4>
                                    <p>New Customer has been successfully Created.</p>
                                </div>

                            <?php
                            }
                            else if($_REQUEST['status']=="exists"){
                                ?>

                                <div class="alert alert-danger pdtAddedAlert" role="alert">
                                    <h4 class="alert-heading">Username Taken</h4>
                                    <p>A user already exists with the Username entered, Please LogIn</p>
                                </div>

                                <?php
                            }
                            else{
                                ?>

                                <div class="alert alert-danger pdtAddedAlert" role="alert">
                                    <h4 class="alert-heading">Couldn't Create Account</h4>
                                    <p>An Error occurred While creating the account, Please check and Try Again.</p>
                                    <a class="btn btn-success" href="cstmr_login.php">Try Again</a>
                                </div>

                                <?php
                            }

                        ?>
                            
                        </div>
            
                        <div class="register">
                            <form action="cstmr_login2.php" class="form" method="post">
                                <label aria-hidden="true">Log in</label>
                                <input class="input" type="email" name="user_id" placeholder="Email" required="">
                                <input class="input col-md-6" type="password" name="access_code" placeholder="Password" required="">
                                <button type="submit">Log in</button>
                            </form>
                        </div>
                </div>
            <!-- </div> -->
        <!-- </div> -->
    </div>







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
</body>
</html>