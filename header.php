<?php

	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div class="total">
	<header>
	<a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/F_icon.svg/1000px-F_icon.svg.png"></a>
		<a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/F_icon.svg/1000px-F_icon.svg.png"></a>
		<a href="#"><img src="https://image.freepik.com/free-icon/facebook-logo_318-49940.jpg"></a>
		<a href="#"><img src="https://image.freepik.com/free-icon/facebook-logo_318-49940.jpg"></a>
		<a href="#"><img src="https://image.freepik.com/free-icon/facebook-logo_318-49940.jpg"></a>
	<div class="head">
		<h1>Welcome to my Website!</h1>
		<h3><i>D@88E</i></h3>
		<nav>
		<div class="main-wrapper">
		
		<div class="nav-login">
		<?php
			if (isset($_SESSION['u_id'])) 
			{?>
				<script>
				window.alert('Hello');
				</script>
				<?php echo "Hello ". $_SESSION['u_first'].  $_SESSION['u_last']
				.'<br>Your Email Is: '.  $_SESSION['u_email'].'<br>Your Age: '.$_SESSION['u_age'] . '<br>Your Gender: '.$_SESSION['u_gender'];
			echo '<form action="includes/logout.inc.php" method="POST"><button type="submit" name="submit">Logout</button>
				</form><br>';

			}
			else
 			{
				echo '
			<form action="includes/login.inc.php" method="POST">
				<input type="text" name="uid" placeholder="Username/e-mail">
				<input type="password" name="pwd" placeholder="password">
				<button type="submit" name="submit">Login</button>
			</form>
			<a href="signup.php">Sign up</a>';
			}
		?>
		
		</div>
		</div>
	</nav>
	</div>
		<div class="nav">
			<img class="floatleft" src="22008207_1996015567341426_8288264178158566292_n.jpg">
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">Products</a></li>
				<li><a href="#">Others</a></li>
			</ul>
			<input type="text" name="Search" placeholder="Search...">
		</div>

	</header>
   <?php if(isset($_SESSION['u_id']))
    {
	echo '<div class="fix container_full">
		<div class="fix container">
			<div class="fix content_wrapper">
			<div class="fix sidebar floatleft">
			<h2>Our Pages</h2>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">Products</a></li>
				<li><a href="#">Others</a></li>
			</ul><br>
			<h2>Our Pages</h2>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">Products</a></li>
				<li><a href="#">Others</a></li>
			</ul>
			<h2>Our Pages</h2>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">Products</a></li>
				<li><a href="#">Others</a></li>
			</ul>
		</div>
				<div class="fix main_wrapper floatleft">


			<h1>Some Lorem Ipsum Code</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
			<h1>Some Lorem Ipsum Code</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
			<h1>Some Lorem Ipsum Code</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		<div class="fix sidebar floatleft">
			<h2>Our Pages</h2>
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">Products</a></li>
				<li><a href="#">Others</a></li>
			</ul><br>
			<h2>Our Pages</h2>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">Products</a></li>
				<li><a href="#">Others</a></li>
			</ul>
			<h2>Our Pages</h2>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">Products</a></li>
				<li><a href="#">Others</a></li>
			</ul>
		</div>
		
	</div>
	</div>
	</div>';
}?>