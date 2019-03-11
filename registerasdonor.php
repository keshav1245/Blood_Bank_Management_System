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
	<link href="styles/register.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
	
	<link rel="stylesheet" type="text/css" href="styles/register.css">
	<title>Donor Registration</title>
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

					<li><a id="active" href="#">Register as a Donor</a></li>
					<li><a href="findblood.php">Request Blood</a></li>
				</ul>
			</div>
		</div>	
		<div class="banner2">	
			<p><span>Fill the form and register your blood group</span> </p>
		</div>
		<div class="regisform">
			<div class="form_heading">
				<h1>Register Now !</h1>
			</div>
			<div class="registrationform">
				
				<form action="registerasdonor.php" method="POST">
					<div class="errordisplay">
						<p><?php include('phpcodes.php');?></p>
					</div>

					<div class="row">
						<div class="col-30">
							<label for="name">Name : </label>
						</div>
						<div class="col-70">
							<input type="text" name="name" placeholder="Enter your name">
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
							<label for="password">Password : </label>
						</div>
						<div class="col-70">
							<input type="password" name="password" placeholder="Enter your Password">
						</div>
					</div>
					<div class="row">
						<div class="col-30">
							<label for="confirmp">Confirm Password : </label>
						</div>
						<div class="col-70">
							<input type="password" name="confirmp" placeholder="Confirm your Password">
						</div>
					</div>
					<div class="row">
						<div class="col-30">
							<label for="address">Local Address : </label>
						</div>
						<div class="col-70">
							<input type="text" name="address" placeholder="Enter your Local Address">
						</div>
					</div>
					<div class="row">
						<div class="col-30">
							<label for="address_p">Permanent Address : </label>
						</div>
						<div class="col-70">
							<input type="text" name="address_p" placeholder="Enter your Permanent Address">
						</div>
					</div>
					<div class="row">
						<div class="col-30">
							<label for="pincode">Pincode/Zip-Code : </label>
						</div>
						<div class="col-70">
							<input type="int" name="pincode" placeholder="Enter your Pin/Zip Code">
						</div>
					</div>
					<div class="row">
						<div class="col-30">
							<label for="BG">Blood Group : </label>
						</div>
						<div class="col-70">
							<input type="text" name="BG" placeholder="Enter your Blood Group">
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
							<label for="state">State : </label>
						</div>
						<div class="col-70">
							<input type="text" name="state" placeholder="Enter your State">
						</div>
					</div>
					<div class="row">
						<div class="col-30">
							
						</div>
						<div id="sub" class="col-70">
							 <input type="submit" name="submit" value="Register as a Donor" >
						</div>
					</div>
				</form>
			</div>
			<div class="quotebelowform">
					<p>"Be a Blood Donor, Be a Hero - a REAL one"</p>
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