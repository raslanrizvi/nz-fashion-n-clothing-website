<?php

    // validating
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
                    <div class="addPdtForm">
                    <form action="search_employee2.php" method="post">
                            

                        <?php

                            $searchby = $_REQUEST['searchby'];
                            $keyword = $_REQUEST['keyword'];


                        ?>

                            <div class="form-row addPdtCtgry">
                                <div class="col-auto my-1">
                                  <label class=" mr-sm-2" for="name">Search By</label>
                                    <select class="custom-select addPdtCtgryDrpDwn mr-sm-10" name="searchby" id="searchby">
                                        <option selected>Select a Range</option>
                                        <option value="user_id" <?php echo ($searchby='user_id')? 'selected=selected':''; ?>    >User ID</option>
                                        <option value="emp_name" <?php echo ($searchby='emp_name')? 'selected=selected':''; ?>    >Name</option>
                                        <option value="user_grp" <?php echo ($searchby='user_grp')? 'selected=selected':''; ?>    >User Group</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Enter Keyword</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control addPdtTB" name="keyword" id="keyword" placeholder="Enter a keyword" value="<?php echo $keyword ?>">
                                </div>
                            </div>
                            <div class="frmbtn">
                                    <input type="submit" class="addPdtbtn" name="submit" id="submit" value="Search Employee">
                                    <input type="reset" class="resetPdtbtn" name="reset"  id="reset" value="RESET">
                                    <a class="homePdtbtn" href="nz_admin_dashboard.php">
                                        Back to Home
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <h1>Search Results</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <table class="table table-striped">
                                <tr>
                                    <th>Picture</th>
                                    <th>User ID</th>
                                    <th>Access Code</th>
                                    <th>Name</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                </tr>


                                <?php

                                    // Receiving the data from the form
                                        $searchby = $_REQUEST['searchby'];
                                        $keyword = $_REQUEST['keyword'];


                                        // Since there are 4 variables for SearchBy Can't create single SQL commands for all

                                        // SQL Command will vary according to the searchby keyword
                                            $sql="";


                                            switch ($searchby) {
                                                case 'user_id':
                                                    $sql = "SELECT * FROM user_logs WHERE user_id = '$keyword'";
                                                    break;
                                                case 'emp_name':
                                                    $sql = "SELECT * FROM user_logs WHERE emp_name = '$keyword' or emp_name LIKE '%$keyword%'";
                                                    break;
                                                case 'user_grp':
                                                    $sql = "SELECT * FROM user_logs WHERE user_grp = '$keyword'";
                                                    break;
                                            }


                                            $rs = $mysqli->query($sql);

                                                if (mysqli_num_rows($rs)>0) {
                                                    // Can Display the records

                                                    while ($row = mysqli_fetch_assoc($rs)) {
                                                    ?>
                                                        <tr>
                                                            <td>
                                                                <img class=".userImg-empSearch" src="images/employee_user_dp/<?php echo $row['emp_picture']; ?>" alt="" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover; box-shadow: -4px 2px 6px #c5c5c5, -6px -6px 12px #fff6e5;">
                                                            </td>
                                                            <td><?php echo $row['user_id'] ?></td>
                                                            <th><?php echo $row['access_code'] ?></th>
                                                            <th><?php echo $row['emp_name'] ?></th>
                                                            <th><?php echo $row['user_grp'] ?></th>
                                                            <td>
                                                                <a class="btn btn-sm btn-warning mb-5" href="edit_employee2.php?user_id=<?php echo $row['user_id']; ?>" style="margin-bottom: 10px;">Edit</a>
                                                                <a class="btn btn-sm btn-danger <?php echo ($_SESSION['user_grp'] != "Admin")? 'disabled':''; ?>" href="delete_employee2.php?user_id=<?php echo $row['user_id']; ?>">Delete</a>
                                                            </td>
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
    </script>

</body>
</html>