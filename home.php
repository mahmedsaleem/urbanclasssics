<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Urban Classics</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/logo.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

 
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
  <script src="https://kit.fontawesome.com/8d63daf4ed.js" crossorigin="anonymous"></script>

  <style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}

#btn-back-to-top {
  position: fixed;
  bottom: 100px;
  right: 20px;
  display: none;
  color:black;
  background-color:#34d77c;
  border-color:#34d77c;
}
</style>
  
</head>

<body>
<!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <img src="img/logo.png" style="height: 100px; widht:100px;">
      <a class="navbar-brand text-brand" href="index.html">Urban<span class="color-b">Classics</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="project/task.html">Proposal</a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="shop.php">Shop</a>
          </li>
		  
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
		  <li class="nav-item">
		  <i class="fas fa-cart-plus" style="margin-top:15px;"><a class="nav-link" href="cartpage/index.php"></a></i>
		  </li>
        </ul>
      </div>

      <?php
    require_once('search.php');
?>
<a href="logout-user.php" style="margin-left:10px;">
    <button style="background-color:#34d77c; margin-left:1 ;margin-bottom:10px;"class="btn" type="submit" ><?php echo $fetch_info['name'] ?></button>
</a>
 
  </nav>
  <!--/ Nav End /-->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Cloths</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Product Name</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Ladies Suit">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Type">Type</label>
              <select class="form-control form-control-lg form-control-a" id="Type">
                <option>All Type</option>
                <option>LADIES</option>
				<option>KIDS</option>
                <option>GENTS</option>
              </select>
            </div>
          </div>
         
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bedrooms">Cloths</label>
              <select class="form-control form-control-lg form-control-a" id="bedrooms">
                <option>Select</option>
                <option>GENTS</option>
                <option>LADIES</option>
                <option>KIDS</option>
              </select>
            </div>
          </div>
          
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="price">Min Price</label>
              <select class="form-control form-control-lg form-control-a" id="price">
                <option>Unlimite</option>
                <option>RS:1000-3000/-</option>
                <option>RS:4000-5000/-</option>
                <option>RS:6000-8000/-</option>
                <option>RS:9000-10000/-</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit"  class="btn btn-b">Search Cloths</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->


<body>

<?php
//require_once('header.php');
$conn=new mysqli("sql101.epizy.com","epiz_31861744","VOHE4jF7ZCG","epiz_31861744_urbanclassics");
$query="SELECT * FROM 	couseral";
$result=mysqli_query($conn,$query);
($row=mysqli_fetch_assoc($result))

?>
<div class="intro intro-carousel">

    <div id="carousel" class="owl-carousel owl-theme">

      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/img3.jpg)">

        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">
                     
                    <h1 class="intro-title mb-4">
                      <span class="color-b">SALE UP</span>TO <?php echo $row['sale_title'] ?> 
                      <br> LIMITED STOCK</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">CLICK HERE</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/img2.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">
                      
                    <h1 class="intro-title mb-4">
                      <span class="color-b">SALE UP</span>TO <?php echo $row['sale_title'] ?> 
                      <br> LIMITED STOCK</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">CLICK HERE</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/img1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">
                      
                    <h1 class="intro-title mb-4">
                      <span class="color-b">SALE UP</span>TO <?php echo $row['sale_title'] ?>
                      <br> LIMITED STOCK</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">CLICK HERE</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

      </div>

        </div>


    </div>
  </div>






 
<section class="section-property section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">New Arrival</h2>
            </div>
            <div class="title-link">
              <a href="shop.php">All Designs
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="property-carousel" class="owl-carousel owl-theme">
        
<?php
	$query="SELECT * FROM 	new_arrivals1";
	$result=mysqli_query($conn,$query);
	while($row=mysqli_fetch_assoc($result))
	{
?>
			<div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/<?php echo $row['images'] ?>" alt="" class="img-a img-fluid" style="height:450px;">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <?php echo $row['stock_name'] ?>
                  </h2>
				  <h2 class="card-title-a"><?php echo $row['discount'] ?></h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a"><?php echo $row['price_tag'] ?></span>
                  </div>
                  
                 <a href="cartpage/index.php"><i class="fas fa-cart-plus"  style="color:#34d77c;">add to cart</i> </a>
                  <br>
                  <a href="product_detail.php" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  
                </div>
              </div>
            </div>
          </div>
		  
		  </div>
	  
      <?php
			}
			?>  

		  
        </div>
         
      </div>

  </section>   
  
    
    
    <div style="margin-left:75%;">
	  <div class="title-link">
    <a href="shop.php">View more
     <span class="ion-ios-arrow-forward"></span>
     </a>
     </div>
	</div>
</div>
</section>






<section style="background-color:white;" class="section-footer">

    <div  class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
            <svg style="height:50px; width:150px;  margin-left:50px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M112 0C85.49 0 64 21.49 64 48V96H16C7.163 96 0 103.2 0 112C0 120.8 7.163 128 16 128H272C280.8 128 288 135.2 288 144C288 152.8 280.8 160 272 160H48C39.16 160 32 167.2 32 176C32 184.8 39.16 192 48 192H240C248.8 192 256 199.2 256 208C256 216.8 248.8 224 240 224H16C7.163 224 0 231.2 0 240C0 248.8 7.163 256 16 256H208C216.8 256 224 263.2 224 272C224 280.8 216.8 288 208 288H64V416C64 469 106.1 512 160 512C213 512 256 469 256 416H384C384 469 426.1 512 480 512C533 512 576 469 576 416H608C625.7 416 640 401.7 640 384C640 366.3 625.7 352 608 352V237.3C608 220.3 601.3 204 589.3 192L512 114.7C499.1 102.7 483.7 96 466.7 96H416V48C416 21.49 394.5 0 368 0H112zM544 237.3V256H416V160H466.7L544 237.3zM160 464C133.5 464 112 442.5 112 416C112 389.5 133.5 368 160 368C186.5 368 208 389.5 208 416C208 442.5 186.5 464 160 464zM528 416C528 442.5 506.5 464 480 464C453.5 464 432 442.5 432 416C432 389.5 453.5 368 480 368C506.5 368 528 389.5 528 416z"/></svg>
            </div><br>
            <h6 style="font-size:25px;" class="w-title-a text-brand">Shipping Nationwide</h6>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                   </p>
             
            </div>
            <div class="w-footer-a">

            <p>Flat Shipping Charges of RS.150 All Across Pakistan</p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
            <i class='fas fa-box-open' style='font-size:50px;color:black; margin-left:90px;'></i>
            </div><br>
            <h6 style="font-size:25px;" class="w-title-a text-brand">Easy Free Return</h6>
            <div class="w-body-a">
              <div class="w-body-a">
              <p>Place an order with peace of mind as we offer free return and exchange</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
            <i class="fa fa-shopping-bag" style="font-size:50px; color:black; margin-left:90px;"></i>
            </div><br>
            <h6 style="font-size:25px;"  class="w-title-a text-brand">Genuine Products</h6>
            <div class="w-body-a">
              <p>Get the Genuine quality commodities from National & International level vendors </p>
              
            </div>
          </div>
        </div>
      </div>
    </div>
 
</section>
<br>







<?php

require_once('footer.php');

?>


    
</body>
</html>