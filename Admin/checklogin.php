<?php
$con=new mysqli("sql101.epizy.com","epiz_31861744","VOHE4jF7ZCG","epiz_31861744_urbanclassics");

 $email=$_POST['email'];
 $pass=$_POST['pass'];
 $query='SELECT * FROM `student` WHERE `email`="'.$email.'" AND `pass`="'.$pass.'"';
 $result=mysqli_query($con,$query);
 $namearray=mysqli_fetch_array($result);
 $name=$namearray['name'];
 $rows=mysqli_num_rows($result);
 if($rows>1)
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
