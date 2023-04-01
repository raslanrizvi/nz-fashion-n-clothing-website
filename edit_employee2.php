<?php

    require("validate_admin.php");

    require("db_connection.php");

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

    <title>Edit Employee</title>

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

                <?php
                        // echo "<pre>";
                        // print_r($_REQUEST);
                        // echo "</pre>";


                    // Searching for the record
                        $user_id = $_REQUEST['user_id'];

                    // building dynamic SQL Code
                        $sql = "select * from user_logs where user_id=" . "'$user_id'";

                    // execute the SQL code
                        $rs = $mysqli->query($sql);

                        $record_count = mysqli_num_rows($rs);

                        if(mysqli_num_rows($rs) > 0){

                            $row = mysqli_fetch_assoc($rs);

                                // echo "<pre>";
                                // print_r($row);
                                // echo "</pre>";
                    ?>


                        <form action="edit_employee3.php" method="post" enctype="multipart/form-data">
                        <a class="login-register">Edit Employee Details</a>

                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type='file' name="emp_picture" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview" style="background-image: url('images/employee_user_dp/<?php echo $row['emp_picture'];?>');">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 inline inputBox-register">
                             <input type="text" name="emp_name" id="emp_name" required="required" value="<?php echo $row['emp_name'];?>">
                             <span class="user" for="name">Nick Name</span>
                        </div>
                        
                        <div class="col-md-3 inputBox-register" style="display: block !important;">
                             <input type="email" name="user_id" id="user_id" required="required" value="<?php echo $row['user_id'];?>">
                             <span class="user" for="name">Username</span>
                        </div>

                        <div class="inputBox-register " style="margin-left: auto; margin-right: auto;">
                            <input type="password" name="access_code_current" id="access_code_current" required="required">
                            <span for="name">Current Password</span>
                        </div>

                        <div class="inputBox-register " style="margin-left: auto; margin-right: auto;">
                            <input type="password" name="access_code_new" id="access_code_new" required="required">
                            <span for="name">New Password</span>
                        </div>

                        <div class="radio-btn-rgst centered col" style="margin-left: auto; margin-right: auto;">
                            <label class=" radio-btn-rgst-admin">
                                <input type="radio" name="user_grp"  id="user_grp" value="Admin" 
                                <?php if ($row['user_grp'] == "Admin") {
                                    echo "Checked";
                                }?>
                                >
                                <span>Admin</span>
                            </label>
                            <label class=" radio-btn-rgst-staff" ">
                                <input type="radio" name="user_grp" id="user_grp" value="Staff"
                                <?php if ($row['user_grp'] == "Staff") {
                                    echo "Checked";
                                }?>
                                >
                                <span>Staff</span>
                            </label>
                        </div>
                
                        <button type="submit" class="enter-register" >Save Edit</button>
                        <!-- <a class="btn home-register" href="nz_admin_dashboard.php" >Home</a> -->
                    </form>

                    <?php
                        }
                        else{
                    ?>

                            <div class="alert alert-danger pdtAddedAlert" role="alert">
                                <h4 class="alert-heading">No Matching Records Found</h4>
                                <p>Please check if the User ID is correct and Try Again.</p>
                                <hr>
                                <a href="edit_employee.php" class="resetPdtbtn">Try Again</a>
                                <a href="nz_admin_dashboard.php" class="homePdtbtn">Back To Home</a>
                            </div>

                    <?php
                        }

                    ?>


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