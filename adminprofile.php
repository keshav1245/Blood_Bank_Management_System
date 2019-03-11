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
	<link href="styles/adminprofile.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="styles/adminprofile.css">
	
	<title>Admin Profile</title>
</head>
<body>
	
		


		<div class="top">
			<div id="navb">
				<ul>
					<li id="logo"><a href="adminprofile.php">ZindagiBacho.com</a></li>
					<!-- <li><a href="#contact">Contact Us</a></li> -->
					<li><a href="adminprofile.php?logout=1">Logout</a></li>
					<li><a href="adminmanage.php">Manage Profile</a></li>

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
		<div class="profilebox">
			<div class="adminhead">
				<h1>Admin Profile</h1>
			</div>
			<div class="adminprofilecontent">
				<div class="tab">
					<button class="tablinks" onclick="openData(event, 'welcome')" id="defaultOpen">Welcome</button>
					<button class="tablinks" onclick="openData(event,'addadmin')">Add Admin</button>
					<button class="tablinks" onclick="openData(event,'appointconf')">Apointment Data Updation</button>
					<button class="tablinks" onclick="openData(event,'pending')">Pending Appointments</button>
					<button class="tablinks" onclick="openData(event,'stk')">Stock Order</button>
					<button class="tablinks" onclick="openData(event,'stkupdate')">Stock Updation</button>
					<button class="tablinks" onclick="openData(event,'dtbdwnl')">Database Download</button>
					<button class="tablinks" onclick="openData(event,'patientdonation')">Update Request</button>
				</div>
			</div>

			
				<div id="welcome" class="tabcontent">
					<h1>Welcome</h1>
					<p>Administrator : <?php echo $_SESSION['username']?></p>
				</div>
				
				<div id="addadmin" class="tabcontent">
					<div class="feedback">
						<h1><span>Add a New Admin User</span></h1>
							<div class="feedbackform">
								<form method="POST" action="adminprofile.php">
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
										<label for="cpass">Confirm Password : </label>
									</div>
									<div class="col-70">
										<input type="password" name="cpass" placeholder="Re-Enter Password">
									</div>
								</div>
								<div class="row">
									<div class="col-30">
										
									</div>
									<div class="col-70">
										<input type="submit" name="addadminnew" value="Add New Admin">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>	

				<div id="appointconf" class="tabcontent">
					<div class="feedback">
						<h1><span>Update Donation Progress</span></h1>
							<div class="feedbackform">
								<form method="POST" action="adminprofile.php">
									<div class="row">
										<div class="col-30">
											<label for="email">Email : </label>
										</div>
										<div class="col-70">
											<input type="email" name="email" placeholder="Registered Email of Donor">
										</div>
									</div>
								<div class="row">
									<div class="col-30">
										<label for="bloodgroup">Blood Group : </label>
									</div>
									<div class="col-70">
										<select name="bloodgroup">
											<option value='O+'>O+</option>
											<option value='O-'>O-</option>
											<option value='A+'>A+</option>
											<option value='A-'>A-</option>
											<option value='AB+'>AB+</option>
											<option value='AB-'>AB-</option>
											<option value='B+'>B+</option>
											<option value='B-'>B-</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-30">
										<label for="confirmation">Blood Donated : </label>
									</div>
									<div class="col-70">
										<select name="confirmation">
											<option value='YES'>Yes</option>
											<option value='NO'>No</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-30">
										<label for="noofbot">Bottles : </label>
									</div>
									<div class="col-70">
										<select name="noofbot">
											<option value='1'>One</option>
											<option value='2'>Two</option>
											<option value='3'>Three</option>
											<option value='4'>Four</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-30">
										<label for="booking">Booked On : </label>
									</div>
									<div class="col-70">
										<input type="date" name="booking">
									</div>
								</div>
								<div class="row">
									<div class="col-30">
										<label for="datedonated">Donated On : </label>
									</div>
									<div class="col-70">
										<input type="date" name="datedonated">
									</div>
								</div>
								<div class="row">
									<div class="col-30">
										
									</div>
									<div class="col-70">
										<input type="submit" name="appointupdate" value="Update Appointment data">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>



				<div id="stk" class="tabcontent">
					<div class="feedback">
						<h1><span>Order New Stock</span></h1>
							<div class="feedbackform">
								<form method="POST" action="adminprofile.php">
									<div class="row">
										<div class="col-30">
											<label for="syringe">Syringe : </label>
										</div>
										<div class="col-70">
											<input type="int" name="syringe" placeholder="Enter Number of Syringes">
										</div>
									</div>
									<div class="row">
										<div class="col-30">
											<label for="canula">Cannula Drips : </label>
										</div>
										<div class="col-70">
											<input type="int" name="canula" placeholder="Enter number of canula drips">
										</div>
									</div>
									<div class="row">
										<div class="col-30">
											<label for="bandages">Bandages : </label>
										</div>
										<div class="col-70">
											<input type="int" name="bandages" placeholder="Number of bandages">
										</div>
									</div>
									<div class="row">
										<div class="col-30">
											<label for="analyser">Hematology Analysers : </label>
										</div>
										<div class="col-70">
											<input type="int" name="analyser" placeholder="Number of Hematology Analysers">
										</div>
									</div>

									<div class="row">
										<div class="col-30">
											<label for="refri">Blood Bank Refrigerator : </label>
										</div>
										<div class="col-70">
											<input type="int" name="refri" placeholder="Number of Blood Bank Refrigerator">
										</div>
									</div>

									<div class="row">
										<div class="col-30">
											<label for="centrifuge">Micro/Mini Centrifuge : </label>
										</div>
										<div class="col-70">
											<input type="text" name="centrifuge" placeholder="Number of Mini/Micro Centrifuge">
										</div>
									</div>
									<div class="row">
										<div class="col-30">
											<label for="plateletshaker">Platelet Shakers : </label>
										</div>
										<div class="col-70">
											<input type="int" name="plateletshaker" placeholder="Number of Platelet Shakers">
										</div>
									</div>
									<div class="row">
										<div class="col-30">
											<label for="aggregometer">Platelet Aggregometer : </label>
										</div>
										<div class="col-70">
											<input type="int" name="aggregometer" placeholder="Number Aggregometer Systems">
										</div>
									</div>
									<div class="row">
										<div class="col-30">
											<label for="freezer">Plasma/Blood Freezer : </label>
										</div>
										<div class="col-70">
											<input type="int" name="freezer" placeholder="Number of Plasma/Blood Freezer">
										</div>
									</div>
									<div class="row">
										<div class="col-30">
											<label for="bottles">Blood Bottles : </label>
										</div>
										<div class="col-70">
											<input type="int" name="bottles" placeholder="Number of Blood Bottles">
										</div>
									</div>
								<div class="row">
									<div class="col-30">
										
									</div>
									<div class="col-70">
										<input type="submit" name="stockorder" value="Send Order Requirement">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>






				<div id="stkupdate" class="tabcontent">
					<div class="feedback">
						<h1><span>Update Stock Delivered</span></h1>
							<div class="feedbackform">
								<form method="POST" action="adminprofile.php">
									<div class="row">
										<div class="col-30">
											<label for="syringe">Syringe : </label>
										</div>
										<div class="col-70">
											<input type="int" name="syringe" placeholder="Enter Number of Syringes Delivered">
										</div>
									</div>
									<div class="row">
										<div class="col-30">
											<label for="canula">Cannula Drips : </label>
										</div>
										<div class="col-70">
											<input type="int" name="canula" placeholder="Enter number of canula drips Delivered">
										</div>
									</div>
									<div class="row">
										<div class="col-30">
											<label for="bandages">Bandages : </label>
										</div>
										<div class="col-70">
											<input type="int" name="bandages" placeholder="Number of bandages Delivered">
										</div>
									</div>
									<div class="row">
										<div class="col-30">
											<label for="analyser">Hematology Analysers : </label>
										</div>
										<div class="col-70">
											<input type="int" name="analyser" placeholder="Number of Hematology Analysers Delivered">
										</div>
									</div>

									<div class="row">
										<div class="col-30">
											<label for="refri">Blood Bank Refrigerator : </label>
										</div>
										<div class="col-70">
											<input type="int" name="refri" placeholder="Number of Blood Bank Refrigerator Delivered">
										</div>
									</div>

									<div class="row">
										<div class="col-30">
											<label for="centrifuge">Micro/Mini Centrifuge : </label>
										</div>
										<div class="col-70">
											<input type="text" name="centrifuge" placeholder="Number of Mini/Micro Centrifuge Delivered">
										</div>
									</div>
									<div class="row">
										<div class="col-30">
											<label for="plateletshaker">Platelet Shakers : </label>
										</div>
										<div class="col-70">
											<input type="int" name="plateletshaker" placeholder="Number of Platelet Shakers Delivered">
										</div>
									</div>
									<div class="row">
										<div class="col-30">
											<label for="aggregometer">Platelet Aggregometer : </label>
										</div>
										<div class="col-70">
											<input type="int" name="aggregometer" placeholder="Number Aggregometer Systems Delivered">
										</div>
									</div>
									<div class="row">
										<div class="col-30">
											<label for="freezer">Plasma/Blood Freezer : </label>
										</div>
										<div class="col-70">
											<input type="int" name="freezer" placeholder="Number of Plasma/Blood Freezer Delivered">
										</div>
									</div>
									<div class="row">
										<div class="col-30">
											<label for="bottles">Blood Bottles : </label>
										</div>
										<div class="col-70">
											<input type="int" name="bottles" placeholder="Number of Blood Bottles Delivered">
										</div>
									</div>
								<div class="row">
									<div class="col-30">
										
									</div>
									<div class="col-70">
										<input type="submit" name="stockupdate" value="Update Inventory">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			
				<div class="tabcontent" id="pending">
					<div class="feedback">
						<h1><span>Check Pending Appointments</span></h1>
						<div class="feedbackform">
							<p><b><?php include('history.php');?></b></p>
							<form method="POST" action="adminprofile.php">
								<div class="row">
									<div class="col-30">
										<label for="username">Username : </label>
									</div>
									<div class="col-70">
										<input type="text" name="username" placeholder="Admin Username">
									</div>
								</div>
								<div class="row">
									<div class="col-30">
										
									</div>
									<div class="col-70">
										<input type="submit" name="pending" value="Display">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div id="patientdonation" class="tabcontent">
					<div class="feedback">
						<h1><span>Update Patient Blood Request</span></h1>
						<div class="feedbackform">
							<form method="POST" action="adminprofile.php">
								<div class="row">
									<div class="col-30">
										<label for="name">Name ; </label>
									</div>
									<div class="col-70">
										<input type="text" name="name" placeholder="Patient Name">
									</div>
								</div>
								<div class="row">
									<div class="col-30">
										<label for="email">E-Mail : </label>
									</div>
									<div class="col-70">
										<input type="email" name="email" placeholder="Patient Email">
									</div>
								</div>
								<div class="row">
									<div class="col-30">
										<label for="address">Address : </label>
									</div>
									<div class="col-70">
										<input type="text" name="address" placeholder="Patient Address">
									</div>
								</div>
								<div class="row">
									<div class="col-30">
										<label for="phone">Contact Number</label>
									</div>
									<div class="col-70">
										<input type="int" name="phone" placeholder="Patient Contact Number">
									</div>
								</div>
								<div class="row">
									<div class="col-30">
										<label for="bloodgroup">Blood Group : </label>
									</div>
									<div class="col-70">
										<select name="bloodgroup">
											<option value='O+'>O+</option>
											<option value='O-'>O-</option>
											<option value='A+'>A+</option>
											<option value='A-'>A-</option>
											<option value='AB+'>AB+</option>
											<option value='AB-'>AB-</option>
											<option value='B+'>B+</option>
											<option value='B-'>B-</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-30">
										<label for="noofbot">Bottles Taken : </label>
									</div>
									<div class="col-70">
										<select name="noofbot">
											<option value='1'>One</option>
											<option value='2'>Two</option>
											<option value='3'>Three</option>
											<option value='4'>Four</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-30">
										<label for="hospital">Hospital Address</label>
									</div>
									<div class="col-70">
										<input type="text" name="hospital" placeholder="Patient Hospital address">
									</div>
								</div>
								<div class="row">
									<div class="col-30">
										<label for="disease">Reason : </label>
									</div>
									<div class="col-70">
										<input type="text" name="disease" placeholder="Reason why patient was admitted">
									</div>
								</div>
								<div class="row">
									<div class="col-30">
										<label for="addressproof">Address Proof : </label>
									</div>
									<div class="col-70">
										<select name="addressproof">
											<option value='submitted'>Submitted</option>
											<option value='not submitted'>Not Submitted</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-30">
										<label for="aadhar">Aadhar Number : </label>
									</div>
									<div class="col-70">
										<input type="int" name="aadhar" placeholder="Patient Aadhar Number">
									</div>
								</div>
								<div class="row">
									<div class="col-30">
										<label for="bill">Hospital Bill Reciept Number  : </label>
									</div>
									<div class="col-70">
										<input type="text" name="bill" placeholder="Bill Reciept Number ">
									</div>
								</div>
								<div class="row">
									<div class="col-30">
										
									</div>
									<div class="col-70">
										<input type="submit" name="requestpatientupdate" value="Update Blood Request">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div id="dtbdwnl" class="tabcontent">
					<div class="feedback">
						<h1><span>Database Access</span></h1>
							<div class="feedbackform">
								<p style="text-align: center;font-size: 20px;"><b><?php include('database.php');?></b></p>
								<form method="POST" action="adminprofile.php">
									<div class="row">
										<div class="col-30">
											<label for="username">username : </label>
										</div>
										<div class="col-70">
											<input type="text" name="username" placeholder="Admin Username">
										</div>
									</div>
									<div class="row">
									<div class="col-30">
										<label for="tablename">Select Database : </label>
									</div>
										<div class="col-70">
											<select name="tablename">
												<option value='1'>Inventory</option>
												<option value='2'>Blood Bottles</option>
												<option value='3'>Appointments</option>
												<option value='4'>Donor Details</option>
												<option value='5'>Admin Details</option>
												<option value='6'>Blood Requests</option>
												<option value='7'>Patient Requests</option>
											</select>
										</div>
									</div>

									<div class="row">
										<div class="col-30">
											
										</div>
										<div class="col-70">
											<input type="submit" name="datacheck" value="Display">
										</div>
									</div>
							</form>
						</div>
					</div>
				</div>



		</div>
		

<script>
function openData(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>
</html>