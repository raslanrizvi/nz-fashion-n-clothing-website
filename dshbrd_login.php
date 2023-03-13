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
    <!-- End Styles -->

    <title>Dashboard Login</title>

    <!-- Favicon Icon -->
    <link rel="icon"  type="image/png" href="images/favicon.png">
    <!-- Favicon Icon -->


</head>
<body class="dshbrdLogin-wrp">
    
    <div class="container">
        <div class="row">
            <div class="box">
                <span class="spanSqure"></span>
                <div class="content">
                    <form action="dshbrd_login2.php" method="post">
                        <a class="login">Employee Log in</a>
                        <div class="inputBox">
                             <input type="email" name="user_id" id="user_id" required="required">
                             <span class="user" for="name">Username</span>
                        </div>
                
                        <div class="inputBox">
                            <input type="password" name="access_code" id="access_code" required="required">
                            <span for="name">Password</span>
                            <input type="hidden" name="user_grp" id="user_grp" value="admin">
                        </div>
                
                        <button type="submit" class="enter">Log Me In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>