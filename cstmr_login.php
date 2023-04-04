<?php

// start session
  session_start();

            $_SESSION['user_id'] = '';
            $_SESSION['cstmr_name'] = '';
            $_SESSION['cstmr_picture'] = '';

?>

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

    <title>NZ Customer Login</title>

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
                            <form action="cstmr_login2.php" class="form" method="post">
                                <label for="chk" aria-hidden="true">Log in</label>
                                <input class="input" type="email" name="user_id" placeholder="Email" required="">
                                <input class="input col-md-6" type="password" name="access_code" placeholder="Password" required="">
                                <button type="submit">Log in</button>
                            </form>
                        </div>
            
                        <div class="register">
                            <form action="cstmr_register2.php" class="form" method="post" enctype="multipart/form-data">
                                <label for="chk" aria-hidden="true">Register</label>
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' name="cstmr_picture" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview" style="background-image: url('images/cstmr_dp/cstmr_default.png');">
                                        </div>
                                    </div>
                                </div>
                                <input class="input" type="text" name="cstmr_name" placeholder="Nick Name" required="">
                                <input class="input" type="email" name="user_id" placeholder="UserName" required="">
                                <input class="input" type="password" name="access_code" placeholder="Password" required="">
                                <button type="submit">Register</button>
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