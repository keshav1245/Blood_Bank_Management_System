<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../fontawesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poor+Story" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link href="styles/index.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
	
	<link rel="stylesheet" type="text/css" href="styles/index.css">
	<link rel="stylesheet" type="text/css" href="styles/register.css">
	<link rel="stylesheet" type="text/css" href="styles/find.css">
	<title>Find Blood</title>
</head>
<body>
	<div class="container">
		<div class="top">
			<div id="navb" class="top_right">
				<ul>
					<li id="logo"><a href="index.html">ZindagiBacho.com</a></li>
					<li><a href="index.html">Home</a></li>
					<li><div class="dropdown">
					    <button class="dropbtn">Login
					    </button>
					    <div class="dropdown-content">
					      <a href="adminlogin.php">Admin Login</a>
					      <a href="Donorlogin.php">Donor Login</a>
					    </div>
					  </div></li>
					<li><a href="about.php">About</a></li>
					<li><a href="#contact">Contact Us</a></li>
					<li><a href="registerasdonor.php">Register as a Donor</a></li>
					<li><a id="active" href="findblood.php">Request Blood</a></li>
				</ul>
			</div>
		</div>
		<div class="banner3">	
			<p><span>Welcome </span></p>
			<p><span>We Wish You a Speedy Recovery</span></p>
			<p><span>Hope you find blood soon, Have faith on God</span></p>
		</div>
		<div class="regisform">
			<div class="form_heading">
				<h1>Search your Group !</h1>
			</div>
			<div class="errordisplay">
					<p><?php include('phpcodes.php');?></p>
			</div>
			<div class="registrationform">
				<form action="findblood.php" method="POST">
					<div class="row">
						<div class="col-30">
							<label for="name">Name : </label>
						</div>
						<div class="col-70">
							<input type="text" name="name" placeholder="Enter patient name">
						</div>
					</div>
					<div class="row">
						<div class="col-30">
							<label for="email">Email : </label>
						</div>
						<div class="col-70">
							<input type="email" name="email" placeholder="Enter your Email">
						</div>
					</div>
					<div class="row">
						<div class="col-30">
							<label for="BG">Blood Group : </label>
						</div>
						<div class="col-70">
							<input type="text" name="BG" placeholder="Enter patient Blood Group">
						</div>
					</div>
					<div class="row">
						<div class="col-30">
							<label for="bottles">Bottles Required : </label>
						</div>
						<div class="col-70">
							<input type="text" name="bottles" placeholder="How much bottles blood do you require ?">
						</div>
					</div>
					<div class="row">
						<div class="col-30">
							<label for="contact">Contact : </label>
						</div>
						<div class="col-70">
							<input type="int" name="contact" placeholder="Enter your Mobile Number">
						</div>
					</div>
					<div class="row">
						<div class="col-30">
							<label for="country">Country : </label>
						</div>
						<div class="col-70">
							<input type="text" name="country" placeholder="Enter your Country of residence">
						</div>
					</div>
					<div class="row">
						<div class="col-30">
							<label for="disease">Disease : </label>
						</div>
						<div class="col-70">
							<input type="text" name="disease" placeholder="Enter Disease patient is suffering from">
						</div>
					</div>
					<div class="row">
						<div class="col-30">
							<label for="hospital">Hospital Address : </label>
						</div>
						<div class="col-70">
							<input type="text" name="hospital" placeholder="Enter Name of hospital patient is currently admitted to">
						</div>
					</div>
					<div class="row">
						<div class="col-30">
							<label for="room">Hospital Room : </label>
						</div>
						<div class="col-70">
							<input type="text" name="room" placeholder="Enter Name of Room in hospital the patient is currently treated">
						</div>
					</div>
					<div class="row">
						<div class="col-30">
							
						</div>
						<div id="sub" class="col-70">
							 <input type="submit" name="search" value="Search for a Donor" >
						</div>
					</div>
				</form>
				<div class="quotebelowform">
					<p>"Life is a Blessing and you are Blessed. Just Hold On."</p>
				</div>
			</div>
		</div>	

		<div class="footer">
			<div class="foot_content">
				<div class="col-50" id="contact">
					<h1>Contact Information</h1>
					<p>Email: tangri57@gmail.com</p>
					<p>Contact: 9041693272</p>
					<p>Whatsapp: 7009957782</p>
				</div>
				<div class="col-50">
					<h1>Social Links </h1>
					<p>Facebook : <a href="https://www.facebook.com/keshav.tangri.775">Keshav Tangri</a></p>
					<p>LinkdIn : <a href="https://www.linkedin.com/in/keshav-t-7ab782104/">Keshav Tangri</a></p>
					<p>Instagram : <a target="_blank" href="https://www.instagram.com/apprentice_fotografo/?hl=en">apprentice_fotografo</a></p>
				</div>	
			</div>
		</div>
		
	</div>
</body>
</html>