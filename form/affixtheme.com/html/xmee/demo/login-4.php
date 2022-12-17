<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from affixtheme.com/html/xmee/demo/login-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Jun 2020 15:13:56 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Xmee | Login and Register Form Html Templates</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="font/flaticon.css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->     
    <section class="fxt-template-animation fxt-template-layout4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-12 fxt-bg-wrap">
                    <div class="fxt-bg-img" data-bg-image="img/brown.jpg">
                        <div class="fxt-header">
                           
                            <div class="fxt-transformY-50 fxt-transition-delay-2">
                                <h1>Welcome To AA Collections</h1>
                            </div>
                            <div class="fxt-transformY-50 fxt-transition-delay-3">
                                <p>Grursus mal suada faci lisis Lorem ipsum dolarorit more ametion consectetur elit. Vesti at bulum nec odio aea the dumm ipsumm ipsum that dolocons rsus mal suada and fadolorit to the dummy consectetur elit the Lorem Ipsum genera.</p>
                            </div>
                        </div>
						
						<div class="fb-login-button" data-size="medium" data-button-type="login_with" data-layout="rounded" data-auto-logout-link="false" data-use-continue-as="false" data-width=""></div>
						
						<div class="g-signin2" data-onsuccess="onSignIn"></div>
						
						
                        <ul class="fxt-socials">
                            <li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-4"><a href=""
                                    title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            
                                       
                            <li class="fxt-google fxt-transformY-50 fxt-transition-delay-6"><a href="#" title="google"><i
                                        class="fab fa-google-plus-g"></i></a></li>
									
										
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-12 fxt-bg-color">
                    <div class="fxt-content">
                        <div class="fxt-form">
                            <form  method="POST">
                                <div class="form-group">  
                                    <label for="email" class="input-label">Email Address</label>                                              
                                    <input type="email" id="email" class="form-control" name="email" placeholder="demo@gmail.com" required="required">
                                </div>
                                <div class="form-group">  
                                    <label for="password" class="input-label">Password</label>                                               
                                    <input id="password" type="password" class="form-control" name="password" placeholder="********" required="required">
                                    <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-checkbox-area">
                                        <div class="checkbox">
                                            <input id="checkbox1" type="checkbox">
                                            <label for="checkbox1">Keep me logged in</label>
                                        </div>
                                        <a href="recover_email.php" class="switcher-text">Forgot Password</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="login" class="fxt-btn-fill">Log in</button>
                                </div>
                            </form>
<?php
$conn=new mysqli("localhost","root","","cloths");

	if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$query= "SELECT * FROM `users_data` WHERE Email='$email' AND Password='$password'";
	$result=mysqli_query($conn,$query);
	if(mysqli_num_rows($result)>0)
	{
		$_SESSION['email']=$email;
	?>

		<script>
	window.location="../../../../../home_login.php";
    </script>	
<?php
	}
	else
	{
		echo'<script 	type="text/javascript"> alert("Invalid name or email")</script>';
	}	
	
}
?>                            
                        </div> 
                        <div class="fxt-footer">
                            <p>Don't have an account?<a href="register-4.php" class="switcher-text">Register</a></p>
                        </div>                            
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	
	
<div id="fb-root" ></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0&appId=703347470465370&autoLogAppEvents=1" nonce="hVDE2hDh"></script>	
    <!-- jquery-->
    <script src="js/jquery-3.5.0.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Imagesloaded js -->
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <!-- Validator js -->
    <script src="js/validator.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from affixtheme.com/html/xmee/demo/login-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Jun 2020 15:14:05 GMT -->
</html>