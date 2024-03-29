<?php

    // validating
        require("validate_admin.php");

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
    <!-- End Styles -->

    <title>Edit Employee</title>
    <!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="images/favicon.png">
    <!-- Favicon Icon -->


</head>
<body>
    
    <div class="containerDash">
        <div class="navigation active">
            <ul>
                <li>
                    <a>
                        <span class="icon"></span>
                        <span class="title">NZ F&C Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="nz_admin_dashboard.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li class="activeNav">
                    <a>
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">Employee Management</span>
                    </a>
                </li>
                <li>
                    <a>
                        <span class="icon"><ion-icon name="basket-outline"></ion-icon></span>
                        <span class="title">Product Management</span>
                    </a>
                </li>
                <li>
                    <a>
                        <span class="icon"><ion-icon name="receipt-outline"></ion-icon></span>
                        <span class="title">Order Management</span>
                    </a>
                </li>
                <li>
                    <a href="dshbrd_login.php">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main active">
            <!-- tonBar Hamburger menu -->
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <!-- user Image -->
                <div class="userDetails">
                    <span class="userText1"><?php echo $_SESSION['emp_name']; ?></span>
                    <br>
                    <span class="userText2"><?php echo $_SESSION['user_grp']; ?></span>
                    <img class="userImg" src="images\employee_user_dp\<?php echo $_SESSION['emp_picture']; ?>" alt="">
                </div>
            </div>


            <div class="content">
                <div class="mainCardAddPdt">

                    <?php

                        if($_REQUEST['status']=="pass"){
                           ?>

                           <div class="alert alert-success pdtAddedAlert mb-3" role="alert">
                                <h4 class="alert-heading">Employee Details Updated</h4>
                                <p>Employee details has been successfully updated</p>
                                <hr>
                                <a href="edit_employee.php" class="addPdtbtn">Edit Another Employee</a>
                                <a href="nz_admin_dashboard.php" class="homePdtbtn">Back To Home</a>
                            </div>

                           <?php
                        }
                        else if($_REQUEST['status']=="fail"){
                            ?>

                            <div class="alert alert-danger pdtAddedAlert" role="alert">
                                <h4 class="alert-heading">Error Updating Employee Details</h4>
                                <p>An Error occurred While updating Employee Details, Please check and Try Again.</p>
                                <hr>
                                <a href="edit_Employee.php" class="addPdtbtn">Try Again</a>
                                <a href="nz_admin_dashboard.php" class="homePdtbtn">Back To Home</a>
                            </div>

                            <?php
                        }
                        else if($_REQUEST['status']=="cPassFail"){
                            ?>

                            <div class="alert alert-danger pdtAddedAlert" role="alert">
                                <h4 class="alert-heading">InCorrect Current Password</h4>
                                <p>The Current Password you entered does not match, Check and Try Again</p>
                                <hr>
                                <a href="edit_Employee.php" class="addPdtbtn">Try Again</a>
                                <a href="nz_admin_dashboard.php" class="homePdtbtn">Back To Home</a>
                            </div>

                            <?php
                        }
                        else if($_REQUEST['status']=="uNameFail"){
                            ?>

                            <div class="alert alert-danger pdtAddedAlert" role="alert">
                                <h4 class="alert-heading">Employee Not Found</h4>
                                <p>We could not find any Users with the UserName You Provided, Check and Try Again</p>
                                <hr>
                                <a href="edit_Employee.php" class="addPdtbtn">Try Again</a>
                                <a href="nz_admin_dashboard.php" class="homePdtbtn">Back To Home</a>
                            </div>

                            <?php
                        }
                        
                    ?>

                </div>
            </div>


        </div>

    </div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <script>
        // menu Toggle 
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');

            toggle.onclick = function(){
                navigation.classList.toggle('active');
                main.classList.toggle('active');

            }

        // Enable Sale Text Box
            document.getElementById('pdtSale').onchange = function() {
            document.getElementById('pdtSaletb').disabled = !this.checked;
            };

        // QTY JS
            function increaseValue() {
            var value = parseInt(document.getElementById('number').value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById('number').value = value;
            }

            function decreaseValue() {
            var value = parseInt(document.getElementById('number').value, 10);
            value = isNaN(value) ? 0 : value;
            value < 1 ? value = 1 : '';
            value--;
            document.getElementById('number').value = value;
            }


        //add hovered class in selected list item
        //  let list = document.querySelectorAll('.navigation li');
        //  function activeLink(){
        //     list.forEach((item) =>
        //     item.classList.remove('activeNav'));
        //     item.classList.add('activeNav'); 
        //  }
        //  list.forEach((item) =>
        //  item.addEventListener('mouseover',activeLink));
    </script>

</body>
</html>