<?php
$conn=new mysqli("sql101.epizy.com","epiz_31861744","VOHE4jF7ZCG","epiz_31861744_urbanclassics");
							
$stock_name=$_POST['stock_name'];
$discount=$_POST['discount'];
$price_tag=$_POST['price_tag'];
$images=$_POST['images'];
$query='INSERT INTO `products`(`stock_name`, `discount`, `price_tag`, `images`) VALUES ("'.$stock_name.'","'.$discount.'","'.$price_tag.'" ,"'.$images.'")';
if (mysqli_query($conn,$query))
{
	echo'<script 	type="text/javascript"> alert("Product Added  ")</script>';
?>	
	<script>
	window.location="add_courses.php";
    </script>
<?php	
}
else
{
	echo'<script 	type="text/javascript"> alert("you are not able to add product")</script>';
	
?>
<script>
	window.location="add_courses.php";
    </script>

<?php	
}

?>