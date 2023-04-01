<?php

    require("validate_admin.php")

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
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/responsive.css"/>
    <link rel="stylesheet" type="text/css" href="css/nz_admin_dashboard.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    <!-- End Styles -->

    <title>Employee Register</title>

    <!-- Favicon Icon -->
    <link rel="icon"  type="image/png" href="images/favicon.png">
    <!-- Favicon Icon -->


</head>
<body class="dshbrdLogin-wrp">
    
    <div class="container">
        <div class="row">
            <div class="box-register">
                <span class="spanSqure-register"></span>
                <div class="content-register">
                    <form action="dshbrd_register2.php" method="post" enctype="multipart/form-data">
                        <a class="login-register">Register New Employee</a>

                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type='file' name="emp_picture" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview" style="background-image: url('images/employee_user_dp/emp_default.jpg');">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 inline inputBox-register">
                             <input type="text" name="emp_name" id="emp_name" required="required">
                             <span class="user" for="name">Nick Name</span>
                        </div>
                        
                        <div class="col-md-3 inputBox-register" style="display: block !important;">
                             <input type="email" name="user_id" id="user_id" required="required">
                             <span class="user" for="name">Username</span>
                        </div>

                        <div class="inputBox-register " style="margin-left: auto; margin-right: auto;">
                            <input type="password" name="access_code" id="access_code" required="required">
                            <span for="name">Password</span>
                        </div>

                        <div class="radio-btn-rgst centered col" style="margin-left: auto; margin-right: auto;">
                            <label class=" radio-btn-rgst-admin">
                                <input type="radio" name="user_grp"  id="user_grp" value="Admin">
                                <span>Admin</span>
                            </label>
                            <label class=" radio-btn-rgst-staff" ">
                                <input type="radio" name="user_grp" id="user_grp" value="Staff">
                                <span>Staff</span>
                            </label>
                        </div>
                
                        <button type="submit" class="enter-register">Register</button>
                        <!-- <a class="btn home-register" href="nz_admin_dashboard.php" >Home</a> -->
                    </form>
                </div>
            </div>
        </div>
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