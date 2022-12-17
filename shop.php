<?php
	require_once('header.php');
	
	$conn=new mysqli("sql101.epizy.com","epiz_31861744","VOHE4jF7ZCG","epiz_31861744_urbanclassics");
?>

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single"> Latest Designs</h1>
            
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

<section class="property-grid grid">


    <div class="container">
      <div class="row">
	  
        <div class="col-sm-12">
          <div class="grid-option">
           
          </div>
        </div>
		<?php   

	
	$query="SELECT * FROM 	products";
	$result=mysqli_query($conn,$query);
	while($row=mysqli_fetch_assoc($result))
	{
?>
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
			
              <img src="img/<?php echo $row['images'] ?>" alt="" class="img-a img-fluid"  style="height:450px;">			  
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="#"> <?php echo $row['stock_name'] ?> </h2>
					 <h2 class="card-title-a"><?php echo $row['discount']?></h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                  
                    <span class="price-a"><?php echo $row['price_tag']?></span>
                  </div>
                  <a href="cartpage/index.php"><i class="fas fa-cart-plus"  style="color:#34d77c;">add to cart</i> </a><br>
                  <a href="property-single.html" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                   
                  </a>
                </div>
                
              </div>
            </div>
          </div>
        </div>
       
    <?php
	}
	   
	  ?>
	  
	  <?php
	  $query="SELECT * FROM  products";
	$result=mysqli_query($conn,$query);
	while($row=mysqli_fetch_assoc($result))
	{
	  
	  ?>
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/<?php echo $row['images']?>" alt="" class="img-a img-fluid" style="height:450px;">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="#"> <?php echo $row['stock_name']?></h2>
					<h2 class="card-title-a"><?php echo $row['discount']?></h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a"><?php echo $row['price_tag']?></span>
                  </div>
                  <a href="cartpage/index.php"><i class="fas fa-cart-plus"  style="color:#34d77c;">add to cart</i> </a><br>
                  <a href="property-single.html" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
               
              </div>
            </div>
			
	
          </div>
		  
	
		  
        </div>
        <?php
	}
		?>
        
      </div>
      
  </section>



  <!--/ Property Grid Star /-->
  <section class="property-grid grid">
    <div class="container">
      <div class="row">
	  
        <div class="col-sm-12">
          <div class="grid-option">
           
          </div>
        </div>
		
		
		<?php
	  $query="SELECT * FROM  products";
	$result=mysqli_query($conn,$query);
	while($row=mysqli_fetch_assoc($result))
	{
	  
	  ?>
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img//<?php echo $row['images']?>" alt="" class="img-a img-fluid"   style="height:450px;">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="#"><?php echo $row['stock_name']?></h2>
					<h2 class="card-title-a"><?php echo $row['discount']?></h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a"><?php echo $row['price_tag']?></span>
                  </div>
                  <a href="cartpage/index.php"><i class="fas fa-cart-plus"  style="color:#34d77c;">add to cart</i> </a><br>
                  <a href="property-single.html" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        
		<?php
	}
		?>
		
		<?php
	  $query="SELECT * FROM  products";
	$result=mysqli_query($conn,$query);
	while($row=mysqli_fetch_assoc($result))
	{
	  
	  ?>
		
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/<?php echo $row['images']?>" alt="" class="img-a img-fluid" style="height:450px;">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="#"><?php echo $row['stock_name']?></h2>
					<h2 class="card-title-a"><?php echo $row['discount']?></h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a"><?php echo $row['price_tag']?></span>
                  </div>
                  <a href="cartpage/index.php"><i class="fas fa-cart-plus"  style="color:#34d77c;">add to cart</i> </a><br>
                  <a href="property-single.html" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                
              </div>
            </div>
          </div>
        </div>
       <?php
	}
	   ?>
        
        
    </div>
  </section>
  <!--/ Property Grid End /-->




<section class="property-grid grid">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="grid-option">
           
          </div>
        </div>
		<?php
	  $query="SELECT * FROM  products";
	$result=mysqli_query($conn,$query);
	while($row=mysqli_fetch_assoc($result))
	{
	  
	  ?>
		
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/<?php echo $row['images']?>" alt="" class="img-a img-fluid" style="height:450px;">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="#"><?php echo $row['stock_name']?></h2>
					<h2 class="card-title-a"><?php echo $row['discount']?></h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a"><?php echo $row['price_tag']?></span>
                  </div>
                  <a href="cartpage/index.php"><i class="fas fa-cart-plus"  style="color:#34d77c;">add to cart</i> </a><br>
                  <a href="property-single.html" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        
        <?php
		}
		?>
		
		<?php
	  $query="SELECT * FROM  products";
	$result=mysqli_query($conn,$query);
	while($row=mysqli_fetch_assoc($result))
	{
	  
	  ?>
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/<?php echo $row['images']?>" alt="" class="img-a img-fluid" style="height:450px;">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="#"><?php echo $row['stock_name']?></h2>
					<h2 class="card-title-a"><?php echo $row['discount']?></h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a"><?php echo $row['price_tag']?></span>
                  </div>
                  <a href="cartpage/index.php"><i class="fas fa-cart-plus"  style="color:#34d77c;">add to cart</i> </a><br>
                  <a href="property-single.html" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
               
              </div>
            </div>
          </div>
        </div>
        <?php
		}
		?>
        
      </div>
      <div class="row">
        <div class="col-sm-12">
          <nav class="pagination-a">
            <ul class="pagination justify-content-end">
              <li class="page-item previous">
                <a class="page-link"  tabindex="-1">
                  <span class="ion-ios-arrow-back"></span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="shop.php">1</a>
              </li>
              <li class="page-item ">
                <a class="page-link" href="shop2.php">2</a>
              </li>
              <li class="page-item ">
                <a class="page-link" href="shop3.php">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="shop2.php">
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>
 
  
<?php
	require_once('footer.php');

?>
 


