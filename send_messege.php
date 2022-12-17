<?php
	$conn=new mysqli("sql101.epizy.com","epiz_31861744","VOHE4jF7ZCG","epiz_31861744_urbanclassics");

	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	



$query='INSERT INTO `comments` ( `name` ,`email`,`messege`) VALUES ("'.$name.'","'.$email.'","'.$message.'")';

$result=mysqli_query($conn,$query);

if($result)
{
	echo'<script 	type="text/javascript"> alert(" Your message will be delivered soon")</script>';


?>	

	<script>
	window.location="contact.php";
    </script>

<?php
}
else

	echo'<script 	type="text/javascript"> alert("Please write uppercase letters ")</script>';
?>
<script>
	window.location="contact.php";
    </script>
<?php

?>
