<?php

function getData(){
  global $mysqli;
  $sql = "select * from product";
  $rs  = $mysqli->query($sql);
    if (mysqli_num_rows($rs) > 0) {
      return $rs;
    }
}

function getDataPerCtgy($ctgy){
  global $mysqli;
  $sql = "select * from product where ctgy= '$ctgy'";
  $rs  = $mysqli->query($sql);
    if (mysqli_num_rows($rs) > 0) {
      return $rs;
    }
}


// Function To Display All Products starts here 
function allProductsComponent($qty, $new_arrivals, $sale, $picture1, $title, $ctgy, $price, $sale_price, $ptd_id){

  if ($ctgy == "KIMONO JACKET") {
    $ctgy_url = "kimonoj.php";
  }
  elseif ($ctgy == "LONGWEAR JACKET") {
    $ctgy_url = "longwearj.php";
  }
  elseif ($ctgy == "STREETWEAR PANTS") {
    $ctgy_url = "streetwearp.php";
  }
  elseif ($ctgy == "SNEAKERS") {
    $ctgy_url = "sneakers.php";
  }
  elseif ($ctgy == "ACCESSORIES") {
    $ctgy_url = "accessories.php";
  }

  if ($qty > 0) {
  
    $element= "
    
      <div class=\"col-lg-4 col-sm-6 wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"300ms\">
        <form action=\"shop_single.php\" method=\"post\">
          <div class=\"singleProduct01 style_two text-center\">
          ";

          if ($new_arrivals == "on") {
            $element .= "<div class=\"labelsPro poppins newPro\">New</div>";
          }
          
          $element .= "
            ";
            if ($sale == "on") {
              $element .= "<div class=\"labelsPro poppins salePro\">Sale</div>";
            }
            
            $element .= "
            
            <div class=\"productThumb01\">
                <img src=\"images/products/large/$picture1\" alt=\"\"/>
                <div class=\"productHover01\">
                <button type=\"submit\" class=\"vol_btn vol_btn_bg\">Buy Now<i class=\"flaticon-arrows-3\"></i></button>
                    <input type=\"hidden\" name=\"ptd_id\" value=\"$ptd_id\">
                </div>
            </div>
            <div class=\"productDesc01\">
              <h5><a href=\"shop_single.php?ptd_id=$ptd_id\" style=\"cursor: pointer;\" class=\"poppins\">$title</a></h5>
              <input type=\"hidden\" name=\"title\" value=\"$title\">
              <p class=\"cats\"><a href=\"$ctgy_url\">$ctgy</a></p>
              <input type=\"hidden\" name=\"ctgy\" value=\"$ctgy\">
                ";
                if ($sale == "on") {
                  $element .= "<p class=\"prices\"><del>RS. $price</del> Rs. $sale_price</p>";
                }
                else{
                  $element .= "<p class=\"prices\">Rs. $price</p>";
                }
                
                $element .= "
                
            </div>
          </div>
        </form>
      </div>
      ";
  } 
  else {

    $element ="
      <div class=\"col-lg-4 col-sm-6 wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"500ms\">
        <div class=\"singleProduct01 style_two outofstock text-center\">
          <div class=\"productThumb01\">
              <img src=\"images/products/large/$picture1\" alt=\"\"/>
              <div class=\"outOfStockLabel poppins\">OUT OF STOCK</div>
          </div>
          <div class=\"productDesc01\">
              <h5><a class=\"poppins disabled\">$title</a></h5>
              <p class=\"cats\"><a href=\"$ctgy_url\">$ctgy</a></p>
              <p class=\"prices\">Rs. $price</p>
          </div>
        </div>
      </div>
    ";
  }
  echo $element;
  
}
// Function To Display All Products Ends here 

// Function To Display only New Arrival Products starts here   
function newArrivalsProductsComponent($qty, $new_arrivals, $sale, $picture1, $title, $ctgy, $price, $sale_price, $ptd_id){

  

  if ($new_arrivals == "on") {
    
    if ($ctgy == "KIMONO JACKET") {
      $ctgy_url = "kimonoj.php";
    }
    elseif ($ctgy == "LONGWEAR JACKET") {
      $ctgy_url = "longwearj.php";
    }
    elseif ($ctgy == "STREETWEAR PANTS") {
      $ctgy_url = "streetwearp.php";
    }
    elseif ($ctgy == "SNEAKERS") {
      $ctgy_url = "sneakers.php";
    }
    elseif ($ctgy == "ACCESSORIES") {
      $ctgy_url = "accessories.php";
    }

    if ($qty > 0) {
    
      $element= "
      
        <div class=\"col-lg-4 col-sm-6 wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"300ms\">
          <form action=\"shop_single.php\" method=\"post\">
            <div class=\"singleProduct01 style_two text-center\">
            ";

            if ($new_arrivals == "on") {
              $element .= "<div class=\"labelsPro poppins newPro\">New</div>";
            }
            
            $element .= "
              ";
              if ($sale == "on") {
                $element .= "<div class=\"labelsPro poppins salePro\">Sale</div>";
              }
              
              $element .= "
              
              <div class=\"productThumb01\">
                  <img src=\"images/products/large/$picture1\" alt=\"\"/>
                  <div class=\"productHover01\">
                  <button type=\"submit\" class=\"vol_btn vol_btn_bg\">Buy Now<i class=\"flaticon-arrows-3\"></i></button>
                  <input type=\"hidden\" name=\"ptd_id\" value=\"$ptd_id\">
                  </div>
              </div>
              <div class=\"productDesc01\">
                  <h5><a type=\"submit\" class=\"poppins\">$title</a></h5>
                  <input type=\"hidden\" name=\"title\" value=\"$title\">
                  <p class=\"cats\"><a href=\"$ctgy_url\">$ctgy</a></p>
                  <input type=\"hidden\" name=\"ctgy\" value=\"$ctgy\">
                  ";
                  if ($sale == "on") {
                    $element .= "<p class=\"prices\"><del>RS. $price</del> Rs. $sale_price</p>";
                  }
                  else{
                    $element .= "<p class=\"prices\">Rs. $price</p>";
                  }
                  
                  $element .= "
                  
              </div>
            </div>
          </form>
        </div>
        ";
    } 
    else {

      $element ="
        <div class=\"col-lg-4 col-sm-6 wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"500ms\">
          <div class=\"singleProduct01 style_two outofstock text-center\">
            <div class=\"productThumb01\">
                <img src=\"images/products/large/$picture1\" alt=\"\"/>
                <div class=\"outOfStockLabel poppins\">OUT OF STOCK</div>
            </div>
            <div class=\"productDesc01\">
                <h5><a class=\"poppins disabled\">$title</a></h5>
                <p class=\"cats\"><a href=\"$ctgy_url\">$ctgy</a></p>
                <p class=\"prices\">Rs. $price</p>
            </div>
          </div>
        </div>
      ";
    }
    
    echo $element;
  }
  
  // else {
  //   $element = "
  //     <div class=\"deals poppins\">
  //       <h2>Opps! Nothing New Yet</h2>
  //       <h4>Sorry,</h4>
  //       <p>Currently we don't have any New Arrivals to Display</p>
  //     </div>
  //   ";
  // }

  
  
}
// Function To Display only New Arrival Products Ends here

// Function To Display only Sale Products starts here   
function saleProductsComponent($qty, $new_arrivals, $sale, $picture1, $title, $ctgy, $price, $sale_price, $ptd_id){

  if ($sale == "on") {
    
    if ($ctgy == "KIMONO JACKET") {
      $ctgy_url = "kimonoj.php";
    }
    elseif ($ctgy == "LONGWEAR JACKET") {
      $ctgy_url = "longwearj.php";
    }
    elseif ($ctgy == "STREETWEAR PANTS") {
      $ctgy_url = "streetwearp.php";
    }
    elseif ($ctgy == "SNEAKERS") {
      $ctgy_url = "sneakers.php";
    }
    elseif ($ctgy == "ACCESSORIES") {
      $ctgy_url = "accessories.php";
    }

    if ($qty > 0) {
    
      $element= "
      
        <div class=\"col-lg-4 col-sm-6 wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"300ms\">
          <form action=\"shop_single.php\" method=\"post\">
            <div class=\"singleProduct01 style_two text-center\">
            ";

            if ($new_arrivals == "on") {
              $element .= "<div class=\"labelsPro poppins newPro\">New</div>";
            }
            
            $element .= "
              ";
              if ($sale == "on") {
                $element .= "<div class=\"labelsPro poppins salePro\">Sale</div>";
              }
              
              $element .= "
              
              <div class=\"productThumb01\">
                  <img src=\"images/products/large/$picture1\" alt=\"\"/>
                  <div class=\"productHover01\">
                  <button type=\"submit\" class=\"vol_btn vol_btn_bg\" >Buy Now<i class=\"flaticon-arrows-3\"></i></button>
                  <input type=\"hidden\" name=\"ptd_id\" value=\"$ptd_id\">
                  </div>
              </div>
              <div class=\"productDesc01\">
                  <h5><a type=\"submit\" class=\"poppins\">$title</a></h5>
                  <input type=\"hidden\" name=\"title\" value=\"$title\">
                  <p class=\"cats\"><a href=\"$ctgy_url\">$ctgy</a></p>
                  <input type=\"hidden\" name=\"ctgy\" value=\"$ctgy\">
                  ";
                  if ($sale == "on") {
                    $element .= "<p class=\"prices\"><del>RS. $price</del> Rs. $sale_price</p>";
                  }
                  else{
                    $element .= "<p class=\"prices\">Rs. $price</p>";
                  }
                  
                  $element .= "
                  
              </div>
            </div>
          </form>
        </div>
        ";
    } 
    else {

      $element ="
        <div class=\"col-lg-4 col-sm-6 wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"500ms\">
          <div class=\"singleProduct01 style_two outofstock text-center\">
            <div class=\"productThumb01\">
                <img src=\"images/products/large/$picture1\" alt=\"\"/>
                <div class=\"outOfStockLabel poppins\">OUT OF STOCK</div>
            </div>
            <div class=\"productDesc01\">
                <h5><a class=\"poppins disabled\">$title</a></h5>
                <p class=\"cats\"><a href=\"$ctgy_url\">$ctgy</a></p>
                <p class=\"prices\">Rs. $price</p>
            </div>
          </div>
        </div>
      ";
    }
    

  }
  else {
    $element = "
      <div class=\"deals poppins\">
        <h2>Opps! Nothing Discounted Yet</h2>
        <h4>Sorry,</h4>
        <p>Currently we don't have any Products on Sale to Display</p>
      </div>
    ";
  }

  echo $element;
  
}
// Function To Display only Sale Products Ends here









// Function to display product details in the cart page starts here

function cartElement($picture1, $title, $cartPrice, $totalPrice, $crtQty, $crt_size, $ptd_id, $subTotal){

    
  $element = "
  <form action=\"checkout.php\" method=\"post\">
  <tr class=\"cart_item wow fadeInUp animated\" data-wow-delay=\"300ms\" data-wow-duration=\"700ms\">
    <td class=\"product-thumbnail\">
        <a href=\"\"><img alt=\"\" src=\"images/products/thumbnail/$picture1\"></a>	
    </td>
    <td class=\"product-name\">
        <a class=\"itemtitle\" href=\"shop_single.php?ptd_id=$ptd_id\">$title</a>
        <input type=\"hidden\" name=\"ptd_id\" value=\"$ptd_id\">
    </td>
    <td class=\"product-price\" data-title=\"Price\">
        <span class=\"amount\">Rs.$cartPrice</span>					
    </td>
    <td class=\"product-size\">
        <span class=\"itemtitle col-1\" href=\"#\">$crt_size</span>
        <input type=\"hidden\" name=\"crt_size\" value=\"$crt_size\">
    </td>
    <td class=\"product-qty\" data-title=\"Quantity\">
            
            <span class=\"input-text amount text col-1\">$crtQty</span>
            <input type=\"hidden\" name=\"crtQty\" value=\"$crtQty\">
            
    </td>
    <td class=\"product-subtotal\" data-title=\"Total\">
        <span class=\"amount total_price\" id=\"total_price\">Rs.$totalPrice</span>
        <input type=\"hidden\" name=\"totalPrice\" value=\"$totalPrice\">		
        <input type=\"hidden\" name=\"subTotal\" value=\"$subTotal\">			
    </td>
    <td class=\"product-remove\">
        <a type=\"submit\" name=\"remove\" href=\"\" class=\"remove\" title=\"Remove this item\" data-product_id=\"70\">
            <i class=\"fa fa-remove\"></i>
        </a>					
    </td>
  </tr>                                
</form>
  ";
  echo $element;
}

// Function to display product details in the cart page ends here
                 


// Function to display product details in the checkout page starts here

function checkOutPtdData($title, $crt_size, $crtQty, $totalPrice){

  $element = "
  
    <tbody>
      <tr class=\"cart_item\">
          <td class=\"product-name\" name=\"title\">
              $title - 
              <strong class=\"product-quantity\" name=\"crt_size\">$crt_size</strong> - 
              <strong class=\"product-quantity\" name=\"crtQty\">$crtQty</strong>													
          </td>
          <td class=\"product-total\">
              <span class=\"amount\">Rs.$totalPrice</span>
          </td>
      </tr>
    </tbody>

  ";
  echo $element;
}

// Function to display product details in the checkout page ends here

// Function to display sale products in shop page starts here

function miniSaleElement($picture1, $title, $salePrice, $price){

  $element = "

      <div class=\"singleProductsa\">
        <img style=\"width: 30%;\" src=\"images/products/thumbnail/$picture1\" alt=\"\"/>
        <h3><a href=\"shop_single.php\">$title</a></h3>
        <p class=\"pricess\">Rs.$salePrice <del>Rs.$price</del></p>
      </div>
  
  ";

  echo $element;

}

// Function to display sale products in shop page ends here

?>



                                    
                                    






                  