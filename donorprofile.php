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
	<link href="styles/donorprofile.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="styles/donorprofile.css">
	
	<title>Donor Profile</title>
</head>
<body>
	<?php
	include('phpcodes.php');
?>
	<?php if(!isset($_SESSION['name'])){
			header("location: adminlogin.php");
			echo "Enter Login credentials first to login to your profile !";
		}?>
		<?php if(isset($_SESSION['name'])):?>
		<?php endif?>		
		

		<div class="top">
			<div id="navb">
				<ul>
					<li id="logo"><a href="donorprofile.php">ZindagiBacho.com</a></li>
					<li><a href="#contact">Contact Us</a></li>
					<li><a href="donorprofile.php?logoutdonor=1">Logout</a></li>
					<li><a href="donormanage.php">Manage Profile</a></li>
				</ul>
			</div>
		</div>
		<div class="profilebox">
			<div class="adminhead">
				<h1>Donor Profile</h1>
					
		
			</div>
			
				<div class="tab">
					<button class="tablinks" onclick="openData(event, 'welcome')" id="defaultOpen">Welcome</button>
					<button class="tablinks" onclick="openData(event,'book')">Book an Appointment</button>
					<button class="tablinks" onclick="openData(event,'history')">Donation History</button>
				</div>

			
				<div id="welcome" class="tabcontent">
					<h1>Welcome</h1>
					<p>Donor : <?php echo $_SESSION['name']?></p>
					<p>Email : <?php echo $_SESSION['email']?></p>
					<p>Blood Group : <?php echo $_SESSION['bgroup']?></p>
					<p>Contact : <?php echo $_SESSION['phone']?></p>
					<p>Residence : <?php echo $_SESSION['address']?></p>
				</div>
				
				<div id="book" class="tabcontent">
					<div class="feedback">
						<h1><span>Book an Appointment</span></h1>
							<div class="feedbackform">
								<form method="POST" action="donorprofile.php">
									<div class="row">
										<div class="col-30">
											<label for="name">Name : </label>
										</div>
										<div class="col-70">
											<input type="text" name="name" placeholder="Donor Name">
										</div>
									</div>
									<div class="row">
										<div class="col-30">
											<label for="email">E-Mail : </label>
										</div>
										<div class="col-70">
											<input type="email" name="email" placeholder="Donor Email">
										</div>
									</div>
									<div class="row">
										<div class="col-30">
											<label for="bgroup">Bloodgroup : </label>
										</div>
										<div class="col-70">
											<input type="text" name="bgroup" placeholder="Donor Bloodgroup">
										</div>
									</div>
								<div class="row">
									<div class="col-30">
										<label for="appointdate">Appointment Date : </label>
									</div>
									<div class="col-70">
										<input type="date" name="appointdate" placeholder="Enter Date for your appointment">
									</div>
								</div>
								<div class="row">
									<div class="col-30">
										<label for="local">Venue : </label>
									</div>
									<div class="col-70">
										<select name="local">
											<option value='GMSH 16'>GMSH 16</option>
											<option value='GMSH 32'>GMSH 32</option>
											<option value='PGIMER'>PGIMER</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-30">
										<label for="slot">Slot : </label>
									</div>
									<div class="col-70">
										<select name="slot">
											<option value='morning'>Morning (9:00AM - 11:00AM)</option>
											<option value='afternoon'>Afternoon (3:00PM - 5:00PM)</option>
											
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-30">
										
									</div>
									<div class="col-70">
										<input type="submit" name="appointment" value="Book Appointment">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>	

				<div id="history" class="tabcontent">
					<div class="feedback">
						<h1><span>Your Contribution</span></h1>
							<div class="feedbackform">
								<p style="text-align: center;font-size: 20px;"><b><?php include('history.php') ?></b></p>
								<form method="POST" action="donorprofile.php">
									<div class="row">
										<div class="col-30">
											<label for="email">Email : </label>
										</div>
										<div class="col-70">
											<input type="email" name="email" placeholder="Registered Email">
										</div>
									</div>
								<div class="row">
									<div class="col-30">
										
									</div>
									<div class="col-70">
										<input type="submit" name="history" value="Display">
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