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

    <title>NZ Admin Dashboard</title>


</head>
<body>
    
    <div class="containerDash">
        <div class="navigation">
            <ul>
                <li>
                    <a href="">
                        <span class="icon"></span>
                        <span class="title">NZ F&C Dashboard</span>
                    </a>
                </li>
                <li class="activeNav">
                    <a href="">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">Employee Management</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><ion-icon name="basket-outline"></ion-icon></span>
                        <span class="title">Product Management</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><ion-icon name="receipt-outline"></ion-icon></span>
                        <span class="title">Order Management</span>
                    </a>
                </li>
                <li>
                    <a href="admin_login.php">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <!-- tonBar Hamburger menu -->
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <!-- user Image -->
                <div class="user">
                    <img src="images\employee_user_dp\user_dp1.png" alt="">
                </div>
            </div>


            <div class="content">
                <div class="mainCard">
                    <span class="mainCrdTitle">Manage Product</span>
                    <div class="subCardWrap">
                        <div class="subCard">
                            <a href="#">
                                <span class="crdIcon"><ion-icon name="bag-add-outline"></ion-icon></span>
                                <span class="crdTitle">Add Product</span>
                            </a>
                        </div>
                        <div class="subCard">
                            <a href="#">
                                <span class="crdIcon"><ion-icon name="close-circle-outline"></ion-icon></span>
                                <span class="crdTitle">Delete Product</span>
                            </a>
                        </div>
                        <div class="subCard">
                            <a href="#">
                                <span class="crdIcon"><ion-icon name="create-outline"></ion-icon></span>
                                <span class="crdTitle">Update Product</span>
                            </a>
                        </div>
                        <div class="subCard">
                            <a href="#">
                                <span class="crdIcon"><ion-icon name="arrow-redo-outline"></ion-icon></span>
                                <span class="crdTitle">Product Page</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mainCard">
                    <span class="mainCrdTitle">Manage Employee</span>
                    <div class="subCard">
                        <a href="#">
                            <span class="crdIcon"><ion-icon name="bag-add-outline"></ion-icon></span>
                            <span class="crdTitle">Add Employee</span>
                        </a>
                    </div>
                    <div class="subCard dltPtdCrd">
                        <a href="#">
                            <span class="crdIcon"><ion-icon name="close-circle-outline"></ion-icon></span>
                            <span class="crdTitle">Delete Employee</span>
                        </a>
                    </div>
                    <div class="subCard">
                        <a href="#">
                            <span class="crdIcon"><ion-icon name="create-outline"></ion-icon></span>
                            <span class="crdTitle">Update Employee</span>
                        </a>
                    </div>
                    <div class="subCard">
                        <a href="#">
                            <span class="crdIcon"><ion-icon name="arrow-redo-outline"></ion-icon></span>
                            <span class="crdTitle">Employee Page</span>
                        </a>
                    </div>
                </div>

                <div class="mainCard">
                    <span class="mainCrdTitle">Manage Order</span>
                    <div class="subCard">
                        <a href="#">
                            <span class="crdIcon"><ion-icon name="bag-add-outline"></ion-icon></span>
                            <span class="crdTitle">Add Order</span>
                        </a>
                    </div>
                    <div class="subCard dltPtdCrd">
                        <a href="#">
                            <span class="crdIcon"><ion-icon name="close-circle-outline"></ion-icon></span>
                            <span class="crdTitle">Delete Order</span>
                        </a>
                    </div>
                    <div class="subCard">
                        <a href="#">
                            <span class="crdIcon"><ion-icon name="create-outline"></ion-icon></span>
                            <span class="crdTitle">Update Order</span>
                        </a>
                    </div>
                    <div class="subCard">
                        <a href="#">
                            <span class="crdIcon"><ion-icon name="arrow-redo-outline"></ion-icon></span>
                            <span class="crdTitle">Order Page</span>
                        </a>
                    </div>
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