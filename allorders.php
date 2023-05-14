<?php

    // validating
        require("validate_user.php");

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
    <!-- End Styles -->

    <title>Edit Product</title>
    <!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="images/favicon.png">
    <!-- Favicon Icon -->


</head>
<body>
    
    <div class="containerDash">
        <div class="navigation active">
            <ul>
                <li>
                    <a href="">
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
                <li>
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
                <li class="activeNav">
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
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <h1>All Orders</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <table class="table table-striped">
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer Name</th>
                                    <th>Address type</th>
                                    <th>Full Address</th>
                                    <th>Phone No</th>
                                    <th>Notes</th>
                                    <th>Total Products</th>
                                    <th>Total Amount</th>
                                    <th>Payment type</th>
                                    <th>Payment Status</th>
                                    <th>Order Status</th>
                                </tr>


                                <?php
                                        // SQL Command will vary according to the searchby keyword
                                            $sql="SELECT * FROM `order`";


                                            $rs = $mysqli->query($sql);

                                                if (mysqli_num_rows($rs)>0) {
                                                    // Can Display the records

                                                    while ($row = mysqli_fetch_assoc($rs)) {
                                                        
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $row['order_id'] ?></td>
                                                            <th><?php echo $row['first_name'] . " " . $row['last_name']?></th>
                                                            <th><?php echo $row['address_name'] ?></th>
                                                            <th><?php echo $row['address1'] . ", " . $row['address2'] . $row['city'] . ", " . $row['state'] . ", " . $row['zipcode']; ?></th>
                                                            <th><?php echo $row['phone_no'] ?></th>
                                                            <th><?php echo $row['notes'] ?></th>
                                                            <th><?php echo $row['total_products'] ?></th>
                                                            <th><?php echo $row['total_amount'] ?></th>
                                                            <th><?php echo $row['payment_method'] ?></th>
                                                            <th><?php echo $row['payment_status'] ?></th>
                                                            <th><?php echo $row['order_status'] ?></th>
                                                        </tr>
                                                    <?php
                                                    }
                                                }
                                                else{
                                                    // No records found
                                                    echo "No records found";
                                                }

                                ?>

                            </table>
                        </div>
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