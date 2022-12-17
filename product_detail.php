  <?php
	require_once('header.php')
	
  ?>

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
       
        <div class="col-md-4 col-lg-4">
		
	<?php
	$conn=new mysqli("localhost","root","","urbanclassics");
	$query="SELECT * FROM 	new_arrivals1";
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_assoc($result)
		?>
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg">
            <ol class="breadcrumb">
          <li class="breadcrumb-item">
                <h2>Product Description</h2>
              </li>
              
            </ol>
          </nav>
         <div>
              <p> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like) </p>
          </div> 
        </div>
      </div>
    </div>
  </section>
  
  
  
  




<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
  
  


  <!--/ Property Single Star /-->
  <section class="property-single nav-arrow-b">
    <div" class="container">
    <h1><?php echo $row['stock_name'] ?> </h1>
      <div class="row">
        <div class="col-sm-4">
		
          <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
            <div class="carousel-item-b" >
              <img src="img/kurties.jpg" style="width:100%;height:100%;" alt="">
            </div>
            <div class="carousel-item-b">
              <img src="img/purple.jpg" alt="">
            </div>
            <div class="carousel-item-b">
              <img src="img/brown.jpg" alt="">
            </div>
          </div>
          
    </div>
  </section>
  


<?php
	require_once('footer.php')
?>
