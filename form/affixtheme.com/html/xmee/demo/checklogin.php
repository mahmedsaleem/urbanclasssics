<?php
$conn=new mysqli("localhost","root","cloths");

 $email=$_POST['email'];
 $pass=$_POST['pass'];
 $query='SELECT * FROM `student` WHERE `Email`="'.$email.'" AND `Pass`="'.$pass.'"';
 $result=mysqli_query($conn,$query);
 $namearray=mysqli_fetch_array($result);
 $name=$namearray['Name'];
 $rows=mysqli_num_rows($result);
 if($rows<1)
 {
?>
<script>
	window.location="login.php";
</script>
<?php
 }
else
{
	Session_start();
	$_SESSION['islogin']=1;
	$_SESSION['name']=$name;
?>
	<script>
	window.location="index.php";
    </script>
<?php
}
?>
