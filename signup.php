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
			{
				
				echo "Hello ". $_SESSION['u_first']. $_SESSION['u_last']
				.'<br>Your Email Is: '.  $_SESSION['u_email'].'<br>Your Age: '.$_SESSION['u_age'] . '<br>Your Gender: '.$_SESSION['u_gender'] ;
			echo '<form action="includes/logout.inc.php" method="POST"><button type="submit" name="submit">Logout</button>
				</form><br><div class="nav">
			<img class="floatleft" src="22008207_1996015567341426_8288264178158566292_n.jpg">
			<ul>
				<li><a href="http://localhost/Student/index.php">Home</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">Products</a></li>
				<li><a href="#">Others</a></li>
			</ul>
			<input type="text" name="Search" placeholder="Search...">
		</div>';


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
		

	</header>

<?php if (!isset($_SESSION['u_id'])) 
{
	echo '<div class="nav">
			<img class="floatleft" src="22008207_1996015567341426_8288264178158566292_n.jpg">
			<ul>
				<li><a href="http://localhost/Student/index.php">Home</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">Products</a></li>
				<li><a href="#">Others</a></li>
			</ul>
			<input type="text" name="Search" placeholder="Search...">
		</div>';
}?>	

<section class="main-container">
	<div class="main-wrapper"></div>
	<h2>Signup</h2><br><br>
	<form class="signup-form" action="includes/signup.inc.php" method="POST">
		<input type="text" name="first" placeholder="Firstname"><br><br>
		<input type="text" name="last" placeholder="Lastname"><br><br>
		<input type="text" name="email" placeholder="Email"><br><br>
		<input type="text" name="uid" placeholder="Username"><br><br>
		<input type="password" name="pwd" placeholder="Password"><br><br>
		<input type="number" name="age" value="" min="15" max="30" placeholder="Enter Your Age"><br><br>
		<select name="coursename" >
			<option selected>BSc Engg</option>
			<option>Higher Diploma</option>
		</select><br><br>
		<select name="institute" >
			<option selected>IUT</option>
			<option>BUET</option>
			<option>DU</option>
		</select><br><br>
		<input type="date" name="bdate" placeholder="BirthDate"><br><br>
		<input type="radio" name="gender" value="male" checked>Male
		<input type="radio" name="gender" value="female">Female<br><br>
		<select name="country">
			<option>USA</option>
			<option selected>Bangladesh</option>
			<option>Nigeria</option>
			<option>Afghanistan</option>
			<option>Pakistan</option>
			<option>Cameroon</option>
			<option>Saudi Arabia</option>
		</select><br><br>
		<input type="file" name="CV"><br><br>
		<select name="dept" >
			<option selected>CSE</option>
			<option>EEE</option>
			<option>MCE</option>
			<option>CEE</option>
		</select><br><br>
		<select name="semester" >
			<option selected>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
		</select><br><br>
		<button type="submit" name="submit" placeholder="">Sign Up</button>
	</form>
</section>

<?php
	include_once 'footer.php';
?>