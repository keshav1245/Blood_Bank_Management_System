<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../fontawesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poor+Story" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link href="styles/index.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="styles/index.css">
	<link href="styles/adminmanage.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="styles/adminmanage.css">
	
	<title>Manage your Profile</title>

</head>
<body>
	<div class="top">
			<div id="navb">
				<ul>
					<li id="logo"><a href="adminprofile.php">ZindagiBacho.com</a></li>
					<!-- <li><a href="#contact">Contact Us</a></li> -->
					<li><a href="adminprofile.php?logout=1">Logout</a></li>
					<li><a href="adminmanage.php">Manage Profile</a></li>
					<li><a href="adminprofile.php">Home</a></li>

				</ul>
			</div>
		</div>
		<div class="row">
				<p style="text-align: center;font-size: 30px;color: white;"><?php
			include('phpcodes.php');
					?></p>
				<?php if(!isset($_SESSION['success'])){
					header("location: adminlogin.php");
					echo "Enter Login credentials first to login to your profile !";
				}?>
				<?php if(isset($_SESSION['success'])):?>
				<?php endif?>		
		</div>

		<div class="passwordchange">
			<div class="passhead">
				<h1><span>Change Your Password</span></h1>
			</div>
			<div class="changeform">
				<form method="POST" action="adminmanage.php">
					<div class="row">
						<div class="col-30">
							<label for="username">Username : </label>
						</div>
						<div class="col-70">
							<input type="text" name="username" placeholder="Enter admin username">
						</div>
					</div>
					<div class="row">
						<div class="col-30">
							<label for="oldpass">Old Password : </label>
						</div>
						<div class="col-70">
							<input type="password" name="oldpass" placeholder="Enter Old password">
						</div>
					</div>
					<div class="row">
						<div class="col-30">
							<label for="newpass">New Password : </label>
						</div>
						<div class="col-70">
							<input type="password" name="newpass" placeholder="Enter New password">
						</div>
					</div>
					<div class="row">
						<div class="col-30">
							<label for="cpass">Confirm Password : </label>
						</div>
						<div class="col-70">
							<input type="password" name="cpass" placeholder="Confirm New password">
						</div>
					</div>
					<div class="row">
						<div class="col-30">
										
						</div>
						<div class="col-70">
								<input type="submit" name="adminpasschange" value="Change Password">
						</div>
					</div>
				</form>
			</div>
		</div>

</body>
</html>