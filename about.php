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
	<link href="styles/about.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="styles/about.css">
	<title>About Us</title>
</head>
<body>
	<div class="container">
		<div class="container">
		<div class="top">
			<div id="navb">
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
					<li><a id="active" href="about.php">About</a></li>
					<li><a href="#contact">Contact Us</a></li>
					<li><a href="registerasdonor.php">Register as a Donor</a></li>
					<li><a href="findblood.php">Request Blood</a></li>
				</ul>
			</div>
		</div>
		<div class="banner">
			<h1><span>About the Mission</span> </h1>
			<p><span>Developer's View</span></p>
			<!-- <a class="btn" href="registerasdonor.php">Register as a Donor</a> -->
		</div>
		<div class="about_content">
			<div id="objective">
				<h1><span>Objective : </span></h1>
				<p><b>The main objective of this website is to link the donors all over the world to the needy patients which are laying on the borderline between life and death and the contrain is Blood requirement. This website's utmost concern is the privacy of the data of the user and so for that the details of donor is not shared with any patient. The patient instead has to give his/her correct details and if the donor is available in that particular area where the patient is admitted he/she can contact the patient either by phone or by mail.</b></p>
			</div>
			<div id="working">
				<h1><span>Working : </span></h1>
				<p><b>This part explains the working of this website. So firstly, any person in the world who donates blood can register as a donor and his / her details are stored in the database. Any patient who requires blood can request for blood giving his/her details. The details of patient is also stored for record purposes. The blood group requested by the patient is searched over the donor's database and an email is sent to all those donors whose blood group matches with that of the patient.</b></p>
				<p><b>The mail encloses patient details such as his name , hospital he is admitted to (for knowing the location) , his email id , contact number (for contacting the patient) , disease he/she is suffering from etc. The donor if he/she is available at or around the hospital (where the patient is admitted) , can contact the patient and donate blood for the social cause. <br>The Subject of the email is : <span id="clr">Urgent Blood required</span><br> and the email is sent from : <span id="clr">zindagibachaodilse.com</span> <br>This email is specially made for this project success and realisation.</b></p>
			</div>
			<div id="developer">
				<h1><span>About Developer : </span></h1>
				<p><b>This project is made by : <span id="clr">Keshav Tangri</span></b></p>
				<p><b>Roll Number : <span id="clr">CO17333</span></b></p>
				<p><b>Subject : <span id="clr">D.B.M.S</span></b></p>
				<p><b>Branch : <span id="clr">C.S.E</span></b></p>
				<p><b>Year : <span id="clr">2nd</span></b></p>
			</div>
		</div>
		<div class="feedback">
				<h1><span>Share Your Views/Suggestions</span></h1>
			<div class="feedbackform">
				<form method="POST" action="about.php">
					<div class="errordisplay">
						<p><?php error_reporting(0); include('phpcodes.php');?></p>
					</div>
					<div class="row">
						<div class="col-30">
							<label for="name">Name : </label>
						</div>
						<div class="col-70">
							<input type="text" name="name" placeholder="Enter your Name">
						</div>
					</div>
					<div class="row">
						<div class="col-30">
							<label for="email">E-Mail : </label>
						</div>
						<div class="col-70">
							<input type="text" name="email" placeholder="Enter your email">
						</div>
					</div>
					<div class="row">
						<div class="col-30">
							<label for="country">Country : </label>
						</div>
						<div class="col-70">
							<input type="text" name="country" placeholder="Enter your Country">
						</div>
					</div>
					<div class="row">
						<div class="col-30">
							<label for="feedb">Feedback : </label>
						</div>
						<div class="col-70">
							<textarea name="feedb" placeholder="Write your suggestions here ..."></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-30">
							
						</div>
						<div class="col-70">
							<input type="submit" name="feed" value="Send Feedback">
						</div>
					</div>
				</form>
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
					<p>Facebook : <a target="_blank" href="https://www.facebook.com/keshav.tangri.775">Keshav Tangri</a></p>
					<p>LinkdIn : <a target="_blank" href="https://www.linkedin.com/in/keshav-t-7ab782104/">Keshav Tangri</a></p>
					<p>Instagram : <a target="_blank" href="https://www.instagram.com/apprentice_fotografo/?hl=en">apprentice_fotografo</a></p>
				</div>	
			</div>
		</div>
	</div>
</body>
</html>