<?php
$conn=new mysqli("sql101.epizy.com","epiz_31861744","VOHE4jF7ZCG","epiz_31861744_urbanclassics");
							
$stock_name=$_POST['stock_name'];
$price_tag=$_POST['price_tag'];
$discount=$_POST['discount'];
$id=$_POST['id'];
$query="UPDATE `new_arrivals1` SET `stock_name`='".$stock_name."',`discount`='".$discount."',`price_tag`='".$price_tag."' WHERE id=".$id;

if (mysqli_query($conn,$query))
{
	echo'<script 	type="text/javascript"> alert("you are added course ")</script>';
?>	
		<script>
		window.location="read_data.php";
		</script>
<?php
	
}
else
{
	echo'<script 	type="text/javascript"> alert("you are not able to add course ")</script>';
	
	
}

?>