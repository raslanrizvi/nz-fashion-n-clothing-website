
<?php

// connecting the Database
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
        <div class="navigation">
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
                <li>
                    <a>
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">Employee Management</span>
                    </a>
                </li>
                <li class="activeNav">
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

        <div class="main">
            <!-- tonBar Hamburger menu -->
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <!-- user Image -->
                <div class="userDetails">
                    <span class="userText1">Raslan</span>
                    <br>
                    <span class="userText2">Admin</span>
                    <img class="userImg" src="images\employee_user_dp\user_dp1.png" alt="">
                </div>
            </div>


            <div class="content">
                <div class="mainCardAddPdt">
                    <div class="addPdtForm">

                    <?php
                        // echo "<pre>";
                        // print_r($_REQUEST);
                        // echo "</pre>";


                    // Searching for the record
                        $ptd_id = $_REQUEST['ptd_id'];

                    // building dynamic SQL Code
                        $sql = "select * from product where ptd_id=$ptd_id";

                    // execute the SQL code
                        $rs = $mysqli->query($sql);

                        $record_count = mysqli_num_rows($rs);

                        if(mysqli_num_rows($rs) > 0){

                            $row = mysqli_fetch_assoc($rs);

                                // echo "<pre>";
                                // print_r($row);
                                // echo "</pre>";
                    ?>

                        <form action="editproduct3.php" method="post">
                            <div class="custom-file imgUpload-grp">
                                <label class="custom-file-label" for="name">Upload Product Image</label>
                                <input type="file" class="custom-file-input imgUpload" name="picture1" id="picture1">
                            </div>
                            <div class="form-group row">
                                <input type="hidden" name="ptd_id" value="<?php echo $row['ptd_id']; ?>">
                                <label for="name" class="col-sm-2 col-form-label">Title of the Product</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control addPdtTB" name="title" id="title" placeholder="Make the Title Strong" value="<?php echo $row['title']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Brand of the product</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control addPdtTB" name="brand" id="pdtBrand" placeholder="Brand of the Product" value="<?php echo $row['brand']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">
                                    <label for="name" class="col-form-label">
                                        Available Size
                                    </label>
                                </div>
                                <div class="col-sm-10 pdtSizeDropdown">
                                    <div class="form-check checkbox-inline">
                                        <input type="hidden" name="size_xs" value="off" >
                                        <input class="form-check-input addPdtTB" type="checkbox" name="size_xs" id="pdtSizeXS" <?php if ($row['size_xs'] == "on") echo "checked"; ?>>
                                        <label class="form-check-label" for="name">
                                        XS
                                        </label>
                                    </div>
                                    <div class="form-check checkbox-inline">
                                        <input type="hidden" name="size_s" value="off" >
                                        <input class="form-check-input addPdtTB" type="checkbox" name="size_s" id="pdtSizeS" <?php if ($row['size_s'] == "on") echo "checked"; ?>>
                                        <label class="form-check-label" for="name">
                                        S
                                        </label>
                                    </div>
                                    <div class="form-check checkbox-inline">
                                        <input type="hidden" name="size_m" value="off" >
                                        <input class="form-check-input addPdtTB" type="checkbox" name="size_m" id="pdtSizeM" <?php if ($row['size_m'] == "on") echo "checked"; ?>>
                                        <label class="form-check-label" for="name">
                                        M
                                        </label>
                                    </div>
                                    <div class="form-check checkbox-inline">
                                        <input type="hidden" name="size_l" value="off" >
                                        <input class="form-check-input addPdtTB" type="checkbox" name="size_l" id="pdtSizeL" <?php if ($row['size_l'] == "on") echo "checked"; ?>>
                                        <label class="form-check-label" for="name">
                                        L
                                        </label>
                                    </div>
                                    <div class="form-check checkbox-inline">
                                        <input type="hidden" name="size_xl" value="off" >
                                        <input class="form-check-input addPdtTB" type="checkbox" name="size_xl" id="pdtSizeXL" <?php if ($row['size_xl'] == "on") echo "checked"; ?>>
                                        <label class="form-check-label" for="name">
                                        XL
                                        </label>
                                    </div>
                                    <div class="form-check checkbox-inline">
                                        <input type="hidden" name="size_xxl" value="off" >
                                        <input class="form-check-input addPdtTB" type="checkbox" name="size_xxl" id="pdtSizeXXL" <?php if ($row['size_xxl'] == "on") echo "checked"; ?>>
                                        <label class="form-check-label" for="name">
                                        XXL
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row addPdtCtgry">
                                <div class="col-auto my-1">
                                  <label class=" mr-sm-2" for="name">Product Category</label>
                                    <select class="custom-select addPdtCtgryDrpDwn mr-sm-10" name="ctgy" id="ctgy">
                                        <option selected><?php echo $row['ctgy']; ?></option>
                                        <option value="KIMONO JACKET">KIMONO JACKET</option>
                                        <option value="LONGWEAR JACKET">LONGWEAR JACKET</option>
                                        <option value="STREETWEAR PANTS">STREETWEAR PANTS</option>
                                        <option value="SNEAKERS">SNEAKERS</option>
                                        <option value="ACCESSORIES">ACCESSORIES</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">
                                    <label for="name" class="col-form-label">
                                        Sub Category
                                    </label>
                                </div>
                                <div class="col-sm-10 pdtSizeDropdown">
                                    <div class="form-check checkbox-inline">
                                        <input type="hidden" name="new_arrivals" value="off" >
                                        <input class="form-check-input addPdtTB" type="checkbox" name="new_arrivals" id="pdtnewarrivals" <?php if ($row['new_arrivals'] == "on") echo "checked"; ?>>
                                        <label class="form-check-label" for="name">
                                        New Arrivals
                                        </label>
                                    </div>
                                    <div class="form-check checkbox-inline">
                                        <input type="hidden" name="sale" value="off" >
                                        <input class="form-check-input addPdtTB" type="checkbox" name="sale" id="pdtSale" <?php if ($row['sale'] == "on") echo "checked"; ?>>
                                        <label class="form-check-label" for="name">
                                        Sale
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Quantity</label>
                                <div class="col-sm-10">
                                    <div class="value-button value-buttonMinus" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                                    <input type="number" name="qty" id="number" value="<?php echo $row['qty']; ?>" />
                                    <div class="value-button value-buttonAdd" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Description</label>
                                <textarea class=" addPdt-Dscrpt form-control addPdtTB addPdtTB-Dscrpt" name="description" id="exampleFormControlTextarea1" rows="3"><?php echo $row['description']; ?></textarea>
                              </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control addPdtTB" name="price" id="pdtTitle" placeholder="1999.99" value="<?php echo $row['price']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Sale Price</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="sale_price" value="0" >
                                  <input type="number" class="form-control addPdtTB" name="sale_price" id="pdtSaletb" <?php if ($row['sale'] == "off") echo "disabled"; ?> placeholder="1999.99" value="<?php echo $row['sale_price']; ?>">
                                </div>
                            </div>
                            <div class="frmbtn">
                                    <input type="submit" class="addPdtbtn" name="submit" id="submit" value="Update Product">
                                    <input type="reset" class="resetPdtbtn" name="reset"  id="reset" value="RESET">
                                    <a class="homePdtbtn" href="editproduct.php">
                                        Back
                                    </a>
                                </div>
                            </div>
                        </form>


                    <?php
                        }
                        else{
                    ?>

                            <div class="alert alert-danger pdtAddedAlert" role="alert">
                                <h4 class="alert-heading">No Matching Records Found</h4>
                                <p>Please check if the Product ID is correct and Try Again.</p>
                                <hr>
                                <a href="editproduct.php" class="resetPdtbtn">Try Again</a>
                                <a href="nz_admin_dashboard.php" class="homePdtbtn">Back To Home</a>
                            </div>

                    <?php
                        }

                    ?>


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