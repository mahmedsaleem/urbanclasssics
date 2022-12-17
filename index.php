
<?php
require_once('header.php');
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


