<?php

function getData(){
  global $mysqli;
  $sql = "select * from product";
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
        <form action=\"index.php\" method=\"post\">
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
                    <a type=\"submit\" class=\"vol_btn vol_btn_bg\" name=\"add\">Add to cart<i class=\"flaticon-arrows-3\"></i></a>
                    input type=\"hidden\" name=\"ptd_id\" value=\"$ptd_id\">
                </div>
            </div>
            <div class=\"productDesc01\">
                <h5><a href=\"shop_single.html\" class=\"poppins\">$title</a></h5>
                <p class=\"cats\"><a href=\"$ctgy_url\">$ctgy</a></p>
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
              <img src=\"images/products/$picture1\" alt=\"\"/>
              <div class=\"outOfStockLabel poppins\">OUT OF STOCK</div>
          </div>
          <div class=\"productDesc01\">
              <h5><a href=\"shop_single.html\" class=\"poppins\">$title</a></h5>
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
          <form action=\"index.php\" method=\"post\">
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
                  <a type=\"submit\" class=\"vol_btn vol_btn_bg\" name=\"add\">Add to cart<i class=\"flaticon-arrows-3\"></i></a>
                  input type=\"hidden\" name=\"ptd_id\" value=\"$ptd_id\">
                  </div>
              </div>
              <div class=\"productDesc01\">
                  <h5><a href=\"shop_single.html\" class=\"poppins\">$title</a></h5>
                  <p class=\"cats\"><a href=\"$ctgy_url\">$ctgy</a></p>
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
                <img src=\"images/products/$picture1\" alt=\"\"/>
                <div class=\"outOfStockLabel poppins\">OUT OF STOCK</div>
            </div>
            <div class=\"productDesc01\">
                <h5><a href=\"shop_single.html\" class=\"poppins\">$title</a></h5>
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
        <h2>Opps! Nothing New Yet</h2>
        <h4>Sorry,</h4>
        <p>Currently we don't have any New Arrivals to Display</p>
      </div>
    ";
  }

  echo $element;
  
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
          <form action=\"index.php\" method=\"post\">
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
                    <a type=\"submit\" class=\"vol_btn vol_btn_bg\" name=\"add\">Add to cart<i class=\"flaticon-arrows-3\"></i></a>
                    input type=\"hidden\" name=\"ptd_id\" value=\"$ptd_id\">
                  </div>
              </div>
              <div class=\"productDesc01\">
                  <h5><a href=\"shop_single.html\" class=\"poppins\">$title</a></h5>
                  <p class=\"cats\"><a href=\"$ctgy_url\">$ctgy</a></p>
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
                <img src=\"images/products/$picture1\" alt=\"\"/>
                <div class=\"outOfStockLabel poppins\">OUT OF STOCK</div>
            </div>
            <div class=\"productDesc01\">
                <h5><a href=\"shop_single.html\" class=\"poppins\">$title</a></h5>
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

// Function To Display only KimonoJ Products starts here   
function kimonoJProductsComponent($qty, $new_arrivals, $sale, $picture1, $title, $ctgy, $price, $sale_price, $ptd_id){

  if ($ctgy == "KIMONO JACKET") {
    
    $ctgy_url = "kimonoj.php";

    if ($qty > 0) {
    
      $element= "
      
        <div class=\"col-lg-4 col-sm-6 wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"300ms\">
          <form action=\"index.php\" method=\"post\">
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
                      <a href=\"shop_single.html\" class=\"vol_btn vol_btn_bg\">Add to cart<i class=\"flaticon-arrows-3\"></i></a>
                      input type=\"hidden\" name=\"ptd_id\" value=\"$ptd_id\">
                  </div>
              </div>
              <div class=\"productDesc01\">
                  <h5><a href=\"shop_single.html\" class=\"poppins\">$title</a></h5>
                  <p class=\"cats\"><a href=\"$ctgy_url\">$ctgy</a></p>
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
                <img src=\"images/products/$picture1\" alt=\"\"/>
                <div class=\"outOfStockLabel poppins\">OUT OF STOCK</div>
            </div>
            <div class=\"productDesc01\">
                <h5><a href=\"shop_single.html\" class=\"poppins\">$title</a></h5>
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
        <h2>Opps! Kimono Jackets Are Out of Stock</h2>
        <h4>Sorry,</h4>
        <p>Currently we don't have any Kimono Jackets to Display</p>
      </div>
    ";
  }

  echo $element;
  
}
// Function To Display only KimonoJ Products Ends here


// Function To Display only LongwearJ Products starts here   
function longwearJProductsComponent($qty, $new_arrivals, $sale, $picture1, $title, $ctgy, $price, $sale_price, $ptd_id){

  if ($ctgy == "LONGWEAR JACKET") {
    
    $ctgy_url = "longwearj.php";

    if ($qty > 0) {
    
      $element= "
      
        <div class=\"col-lg-4 col-sm-6 wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"300ms\">
          <form action=\"index.php\" method=\"post\">
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
                    <a type=\"submit\" class=\"vol_btn vol_btn_bg\" name=\"add\">Add to cart<i class=\"flaticon-arrows-3\"></i></a>
                    input type=\"hidden\" name=\"ptd_id\" value=\"$ptd_id\">
                  </div>
              </div>
              <div class=\"productDesc01\">
                  <h5><a href=\"shop_single.html\" class=\"poppins\">$title</a></h5>
                  <p class=\"cats\"><a href=\"$ctgy_url\">$ctgy</a></p>
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
                <img src=\"images/products/$picture1\" alt=\"\"/>
                <div class=\"outOfStockLabel poppins\">OUT OF STOCK</div>
            </div>
            <div class=\"productDesc01\">
                <h5><a href=\"shop_single.html\" class=\"poppins\">$title</a></h5>
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
        <h2>Opps! Longwear Jackets are Out Of Stock</h2>
        <h4>Sorry,</h4>
        <p>Currently we don't have any Longware Jackets to Display</p>
      </div>
    ";
  }

  echo $element;
  
}
// Function To Display only LongwearJ Products Ends here

// Function To Display only streetwearP Products starts here   
function streetwearPProductsComponent($qty, $new_arrivals, $sale, $picture1, $title, $ctgy, $price, $sale_price, $ptd_id){

  if ($ctgy == "KIMONO JACKET") {
    
    $ctgy_url = "streetwearp.php";

    if ($qty > 0) {
    
      $element= "
      
        <div class=\"col-lg-4 col-sm-6 wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"300ms\">
          <form action=\"index.php\" method=\"post\">
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
                    <a type=\"submit\" class=\"vol_btn vol_btn_bg\" name=\"add\">Add to cart<i class=\"flaticon-arrows-3\"></i></a>
                    input type=\"hidden\" name=\"ptd_id\" value=\"$ptd_id\">
                  </div>
              </div>
              <div class=\"productDesc01\">
                  <h5><a href=\"shop_single.html\" class=\"poppins\">$title</a></h5>
                  <p class=\"cats\"><a href=\"$ctgy_url\">$ctgy</a></p>
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
                <img src=\"images/products/$picture1\" alt=\"\"/>
                <div class=\"outOfStockLabel poppins\">OUT OF STOCK</div>
            </div>
            <div class=\"productDesc01\">
                <h5><a href=\"shop_single.html\" class=\"poppins\">$title</a></h5>
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
        <h2>Opps! Streetwear Pants are Out Of Stock</h2>
        <h4>Sorry,</h4>
        <p>Currently we don't have any Streetwear Pants to Display</p>
      </div>
    ";
  }

  echo $element;
  
}
// Function To Display only streetwearP Products Ends here

// Function To Display only SNEAKER Products starts here   
function sneakerProductsComponent($qty, $new_arrivals, $sale, $picture1, $title, $ctgy, $price, $sale_price, $ptd_id){

  if ($ctgy == "SNEAKER") {
    
    $ctgy_url = "sneaker.php";

    if ($qty > 0) {
    
      $element= "
      
        <div class=\"col-lg-4 col-sm-6 wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"300ms\">
          <form action=\"index.php\" method=\"post\">
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
                    <a type=\"submit\" class=\"vol_btn vol_btn_bg\" name=\"add\">Add to cart<i class=\"flaticon-arrows-3\"></i></a>
                    input type=\"hidden\" name=\"ptd_id\" value=\"$ptd_id\">
                  </div>
              </div>
              <div class=\"productDesc01\">
                  <h5><a href=\"shop_single.html\" class=\"poppins\">$title</a></h5>
                  <p class=\"cats\"><a href=\"$ctgy_url\">$ctgy</a></p>
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
                <img src=\"images/products/$picture1\" alt=\"\"/>
                <div class=\"outOfStockLabel poppins\">OUT OF STOCK</div>
            </div>
            <div class=\"productDesc01\">
                <h5><a href=\"shop_single.html\" class=\"poppins\">$title</a></h5>
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
        <h2>Opps! Sneakers Are Out Of Stock</h2>
        <h4>Sorry,</h4>
        <p>Currently we don't have any Sneakers to Display</p>
      </div>
    ";
  }

  echo $element;
  
}
// Function To Display only SNEAKER Products Ends here


// Function To Display only ACCESSORIES Products starts here   
function accessoriesProductsComponent($qty, $new_arrivals, $sale, $picture1, $title, $ctgy, $price, $sale_price, $ptd_id){

  if ($ctgy == "ACCESSORIES") {
    
    $ctgy_url = "accessories.php";

    if ($qty > 0) {
    
      $element= "
      
        <div class=\"col-lg-4 col-sm-6 wow fadeInUp\" data-wow-duration=\"700ms\" data-wow-delay=\"300ms\">
          <form action=\"index.php\" method=\"post\">
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
                    <a type=\"submit\" class=\"vol_btn vol_btn_bg\" name=\"add\">Add to cart<i class=\"flaticon-arrows-3\"></i></a>
                    input type=\"hidden\" name=\"ptd_id\" value=\"$ptd_id\">
                  </div>
              </div>
              <div class=\"productDesc01\">
                  <h5><a href=\"shop_single.html\" class=\"poppins\">$title</a></h5>
                  <p class=\"cats\"><a href=\"$ctgy_url\">$ctgy</a></p>
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
                <img src=\"images/products/$picture1\" alt=\"\"/>
                <div class=\"outOfStockLabel poppins\">OUT OF STOCK</div>
            </div>
            <div class=\"productDesc01\">
                <h5><a href=\"shop_single.html\" class=\"poppins\">$title</a></h5>
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
        <h2>Opps! Accessories are Out Of Stock</h2>
        <h4>Sorry,</h4>
        <p>Currently we don't have any Accessories to Display</p>
      </div>
    ";
  }

  echo $element;
  
}
// Function To Display only ACCESSORIES Products Ends here

?>

                  