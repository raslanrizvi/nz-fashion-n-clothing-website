<?php


/* image resize function starts here */
function resizeThumbPicture($path, $image_name)	{
  $uploadedfile = $path.$image_name;//actual path of the image


  // Capture the original size of the uploaded image
  list($width,$height,$type) = getimagesize($uploadedfile);


  if(@$width==@$height){
    @$newwidth=150;
    @$newheight=150;
  }
  else if(@$width>@$height){
    //landscape
    @$newwidth=150;
    @$newheight=120;
  }
  else if(@$height>@$width){
    //portrait
    @$newwidth=150;
    @$newheight=150;
  }

  if($type==1)
  {
    $src = imagecreatefromgif(@$uploadedfile);
  }
  else if($type==2)
  {
    $src = imagecreatefromjpeg(@$uploadedfile);
  }
  else if($type==3)
  {
    $src = imagecreatefrompng(@$uploadedfile);
  }


  @$tmp=imagecreatetruecolor(@$newwidth,@$newheight);
  imagecopyresampled($tmp,$src,0,0,0,0,@$newwidth,@$newheight,@$width,@$height);
  @$filename = $path.$image_name;
  imagejpeg($tmp,$filename,100);//100 means full 100% quality
  imagedestroy($src);
  imagedestroy($tmp); // NOTE: PHP will clean up the temp

  }/* image resize function ends   here */

//************ file resize code with PHP end




// get the picture name 
  function getProductPicture($ptd_id){
    global $mysqli;
    $sql = "select picture1 from product where ptd_id=$ptd_id";
    $rs  = $mysqli->query($sql);
    $row = mysqli_fetch_assoc($rs);
    return $row['picture1'];
  }


 
 function getCustomerPicture($cus_id){
  global $mysqli;
  $sql = "select picture from tblcustomer where cus_id='$cus_id'";
  $rs  = $mysqli->query($sql);
  $row = mysqli_fetch_assoc($rs);
  return $row['picture'];
}

function getEmpPicture($user_id){
  global $mysqli;
  $sql = "select emp_picture from user_logs where user_id=" . "'$user_id'";
  $rs  = $mysqli->query($sql);
  $row = mysqli_fetch_assoc($rs);
  return $row['emp_picture'];
}

function getCstmrPicture($user_id){
  global $mysqli;
  $sql = "select cstmr_picture from cstmr_logs where user_id=" . "'$user_id'";
  $rs  = $mysqli->query($sql);
  $row = mysqli_fetch_assoc($rs);
  return $row['cstmr_picture'];
}


 

 ?>
 <!-- password showing script -->
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

