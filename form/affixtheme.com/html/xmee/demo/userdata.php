 <?php
	$conn=new mysqli("localhost","root","","cloths");

	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
if($password==$cpassword)
{
$query='INSERT INTO `users_data` ( `Name` ,`Email`,`Password`) VALUES ("'.$name.'","'.$email.'","'.$password.'" )';
$result=mysqli_query($conn,$query);
if($result)
{
	echo'<script 	type="text/javascript"> alert("Congrtatulations you are registered")</script>';
?>	

	<script>
	window.location="login-4.php";
    </script>

<?php
}
}
else
{
	echo'<script 	type="text/javascript"> alert("Password does not match ")</script>';
?>
<script>
	window.location="register-4.php";
    </script>

<?php

}
?> 