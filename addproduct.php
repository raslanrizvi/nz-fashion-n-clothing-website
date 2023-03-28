<?php

    // validating
        require("validate_user.php");
        

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

    <title>Add New Product</title>
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
                    <a href="">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">Employee Management</span>
                    </a>
                </li>
                <li class="activeNav">
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
                        <form action="addproduct2.php" method="post" enctype="multipart/form-data">
                            <div class="custom-file imgUpload-grp">
                                <label class="custom-file-label" for="name">Upload Product Image</label>
                                <input type="file" class="custom-file-input imgUpload" name="picture1" id="picture1">
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Title of the Product</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control addPdtTB" name="title" id="title" placeholder="Make the Title Strong">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Brand of the product</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control addPdtTB" name="brand" id="pdtBrand" placeholder="Brand of the Product">
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
                                        <input class="form-check-input addPdtTB" type="checkbox" name="size_xs" id="pdtSizeXS">
                                        <label class="form-check-label" for="name">
                                        XS
                                        </label>
                                    </div>
                                    <div class="form-check checkbox-inline">
                                        <input type="hidden" name="size_s" value="off" >
                                        <input class="form-check-input addPdtTB" type="checkbox" name="size_s" id="pdtSizeS">
                                        <label class="form-check-label" for="name">
                                        S
                                        </label>
                                    </div>
                                    <div class="form-check checkbox-inline">
                                        <input type="hidden" name="size_m" value="off" >
                                        <input class="form-check-input addPdtTB" type="checkbox" name="size_m" id="pdtSizeM">
                                        <label class="form-check-label" for="name">
                                        M
                                        </label>
                                    </div>
                                    <div class="form-check checkbox-inline">
                                        <input type="hidden" name="size_l" value="off" >
                                        <input class="form-check-input addPdtTB" type="checkbox" name="size_l" id="pdtSizeL">
                                        <label class="form-check-label" for="name">
                                        L
                                        </label>
                                    </div>
                                    <div class="form-check checkbox-inline">
                                        <input type="hidden" name="size_xl" value="off" >
                                        <input class="form-check-input addPdtTB" type="checkbox" name="size_xl" id="pdtSizeXL">
                                        <label class="form-check-label" for="name">
                                        XL
                                        </label>
                                    </div>
                                    <div class="form-check checkbox-inline">
                                        <input type="hidden" name="size_xxl" value="off" >
                                        <input class="form-check-input addPdtTB" type="checkbox" name="size_xxl" id="pdtSizeXXL">
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
                                        <option selected>Select a Category</option>
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
                                        <input class="form-check-input addPdtTB" type="checkbox" name="new_arrivals" id="pdtnewarrivals">
                                        <label class="form-check-label" for="name">
                                        New Arrivals
                                        </label>
                                    </div>
                                    <div class="form-check checkbox-inline">
                                        <input type="hidden" name="sale" value="off" >
                                        <input class="form-check-input addPdtTB" type="checkbox" name="sale" id="pdtSale">
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
                                    <input type="number" name="qty" id="number" value="0" />
                                    <div class="value-button value-buttonAdd" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Description</label>
                                <textarea class=" addPdt-Dscrpt form-control addPdtTB addPdtTB-Dscrpt" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control addPdtTB" name="price" id="pdtTitle" placeholder="1999.99">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Sale Price</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="sale_price" value="0" >
                                  <input type="number" class="form-control addPdtTB" name="sale_price" id="pdtSaletb" disabled placeholder="1999.99">
                                </div>
                            </div>
                            <div class="frmbtn">
                                    <input type="submit" class="addPdtbtn" name="submit" id="submit" value="ADD PRODUCT">
                                    <input type="reset" class="resetPdtbtn" name="reset"  id="reset" value="RESET">
                                    <a class="homePdtbtn" href="nz_admin_dashboard.php">
                                        Back to Home
                                    </a>
                                </div>
                            </div>
                        </form>
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