<?php
session_start();
$_SESSION['islogin']=0;
	unset($_SESSION);
?>
	<script>

	window.location="login.php";
</script>
