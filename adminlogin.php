
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
	<link href="styles/adminlogin.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="styles/adminlogin.css">

	<title>Admin Login</title>
</head>
<body>
	<div class="container">
		<div class="top">
			<div id="navb">
				<ul>
					<li id="logo"><a href="index.html">ZindagiBacho.com</a></li>
					<li><a href="index.html">Home</a></li>
					<li><div class="dropdown">
					    <button id="active" class="dropbtn">Login
					    </button>
					    <div class="dropdown-content">
					      <a id="active" href="adminlogin.php">Admin Login</a>
					      <a href="Donorlogin.php">Donor Login</a>
					    </div>
					  </div></li>
					<li><a href="about.php">About</a></li>
					<li><a href="#contact">Contact Us</a></li>
					<li><a href="registerasdonor.php">Register as a Donor</a></li>
					<li><a href="findblood.php">Request Blood</a></li>
				</ul>
			</div>
		</div>
		<div class="loginbox">
			<div class="loginhead">
				<h1> Admin Login</h1>
			</div>
			<div class="credentialbox">
				<div class="loginform">
					<div class="errordisplay">
							<p><?php include('phpcodes.php');?></p>
						</div>
					<form method="POST" action="adminlogin.php">
						
						<div class="row">
							<div class="col-30">
								<label for="username">Username : </label>
							</div>
							<div class="col-70">
								<input type="text" name="username" placeholder="Enter your Username">
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
								
							</div>
							<div id="sub" class="col-70">
								 <input type="submit" name="adlogin" value="Log In as Administrator" >
							</div>
						</div>
					</form>
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
					<p>Facebook : <a target="_blank" href="https://www.facebook.com/keshav.tangri.775">Keshav Tangri</a></p>
					<p>LinkdIn : <a target="_blank" href="https://www.linkedin.com/in/keshav-t-7ab782104/">Keshav Tangri</a></p>
					<p>Instagram : <a target="_blank" href="https://www.instagram.com/apprentice_fotografo/?hl=en">apprentice_fotografo</a></p>
				</div>	
			</div>
		</div>
		
		
	</div>
</body>
</html>