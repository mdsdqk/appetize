<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="zxx" class="no-js" ng-app="eq">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>login and signup</title>	
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">					
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="signup.css">
		<link rel="stylesheet" href="login.css">
		<script type="text/javascript" src="C:/xampp/htdocs/angular/angular.js"></script>
	</head>
	<body id="body">
		  <header id="header" id="home">
		    <div class="container">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <!--<li class="menu-active"><a href="#home">Home</a></li>-->
			          <li><button class="topButtons" onclick="login()">Login</button></li>
			          <li><button class="topButtons" onclick="signup()">Signup</button></li>
			          <li><button class="topButtons">About Us</button></li>
			          <!--<li class="menu-has-children"><a href="">Pages</a>
			            <ul>	
			              <li><a href="generic.html">Generic</a></li>
			              <li><a href="elements.html">Elements</a></li>
			            </ul>
			          </li>-->
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->

		<!-- start banner Area -->
		<section class="banner-area relative" id="home">
			<div class="container">
				<div class="row fullscreen d-flex align-items-center justify-content-start">
					<div class="banner-content col-lg-8 col-md-12">
						<h4 class="text-white text-uppercase">Wide Options of Choice</h4>
						<h1>
							Delicious Receipes					
						</h1>
						<p class="text-white">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp <br> or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
						</p>
						<a href="#" class="primary-btn header-btn text-uppercase">Check Our Menu</a>
					</div>												
				</div>
			</div>
		</section>
		<div id="login-box">
		  <form method="POST" ng-app="form" action='signup.php'> 	
		  <?php include('errors.php'); ?>
		  <div >
		    <h1>Sign up</h1>
		    
		    <input type="text" name="username" placeholder="Username" required value="<?php echo $username; ?>"/>
		    <input type="text" name="email" placeholder="E-mail" email required value="<?php echo $email; ?>"/>
		    <input type="password" name="password_1" required placeholder="Password" />
		    <input type="password" name="password_2" required placeholder="Retype password" />
		    
		    <input type="submit" name="reg_usr" ng-disabled="form.$invalid" value="Sign me up" />	
		  </div>
	
		</form>
		</div>

		<div id="box">
		<form method="POST" action="signup.php" >
		  	<?php include('errors.php'); ?>
		  	<div class="input-group">
		  		<label>Username</label>
		  		<input type="text" name="username" >
		  	</div>
		  	<div class="input-group">
		  		<label>Password</label>
		  		<input type="password" name="password">
		  	</div>
		  	<div class="input-group">
		  		<button type="submit" class="btn" name="login_user">Login</button>
		  	</div>
	  </form>
		</div>

		<!-- End banner Area -->	
		<script type="text/javascript" src="signup.js"></script>
		<script type="text/javascript" src="login.js"></script>
		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>			
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="js/easing.min.js"></script>			
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.min.js"></script>	
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>	
		<script src="js/owl.carousel.min.js"></script>			
		<script src="js/jquery.sticky.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>			
		<script src="js/parallax.min.js"></script>	
		<script src="js/mail-script.js"></script>	
		<script src="js/main.js"></script>	
	</body>
</html>