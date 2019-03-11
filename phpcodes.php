<?php
	session_start();

	$aduser = array();
	$conn = mysqli_connect("localhost","root","","BBMS");
	if (isset($_POST['submit'])) {
	if(mysqli_connect_errno()){
		echo "Connection with database failed !";
	}else{
		$name = mysqlI_real_escape_string($conn,$_POST['name']);
		$email = mysqlI_real_escape_string($conn,$_POST['email']);
		$address = mysqlI_real_escape_string($conn,$_POST['address']);
		$address_p = mysqlI_real_escape_string($conn,$_POST['address_p']);
		$pincode = mysqlI_real_escape_string($conn,$_POST['pincode']);
		$bloodgroup = mysqlI_real_escape_string($conn,$_POST['BG']);
		$country = mysqlI_real_escape_string($conn,$_POST['country']);
		$contact = mysqlI_real_escape_string($conn,$_POST['contact']);
		$state = mysqlI_real_escape_string($conn,$_POST['state']);
		$pass = md5($_POST['password']);
		$cpass = md5($_POST['confirmp']);
		if(empty($name)||empty($email)||empty($address)||empty($address_p)||empty($pincode)||empty($bloodgroup)||empty($country)||empty($contact)||empty($state)||empty($pass) ){

			echo "One or More fields is/are Empty !";
		}else{
			if($pass!=$cpass){
				echo "Passwords does not match. Check and try again. ";
			}else{
				$sql = "INSERT INTO `donor_details`(`name`, `email`, `password`, `L_address`, `P_address`, `pincode`, `bgroup`, `phone`, `country`, `state`) VALUES ('$name','$email','$pass', '$address','$address_p','$pincode','$bloodgroup','$contact','$country','$state')";
			$result = mysqli_query($conn,$sql);
			if($result){
				echo "Thank You for Registering Hero :D ";
			}else{
				echo "Some Error Occured !";
			}
			}
		}
	}
	}


	if(isset($_POST['search'])){
		if (mysqli_connect_errno()) {
			echo "Connection with database failed !";
		}else{
			$name = mysqlI_real_escape_string($conn,$_POST['name']);
			$email = mysqlI_real_escape_string($conn,$_POST['email']);
			$bloodgroup = mysqlI_real_escape_string($conn,$_POST['BG']);
			$country = mysqlI_real_escape_string($conn,$_POST['country']);
			$contact = mysqlI_real_escape_string($conn,$_POST['contact']);
			$disease = mysqlI_real_escape_string($conn,$_POST['disease']);
			$hospital = mysqlI_real_escape_string($conn,$_POST['hospital']);
			$room = mysqlI_real_escape_string($conn,$_POST['room']);
			$bottles = $_POST['bottles'];
		
			if(empty($name)||empty($email)||empty($bloodgroup)||empty($country)||empty($contact)||empty($disease)||empty($hospital)||empty($room) ){

			echo "One or More fields is/are Empty !";
		}else{
			$sql = "INSERT INTO `patient_details`(`name`, `email`, `bgroup`, `country`, `phone`, `disease`, `hospital`, `room`, `no of bottles`) VALUES ('$name','$email','$bloodgroup','$country','$contact','$disease','$hospital','$room','$bottles')";
			$result = mysqli_query($conn,$sql);
			if ($result) {
				$sql2 = "SELECT `bottles` FROM `bloodbottles` WHERE `bgroup` = '$bloodgroup'";

				$result2 = mysqli_query($conn,$sql2);
				if($result2){
					$row2 = $result2->fetch_assoc();
					if($bottles+5<$row2['bottles']){

						$subject = "Blood Request";
						$message = "Dear ".$name.",\nWe are hereby pleased to tell you that our blood bank has the quantity of blood pouches you require for your treatement of ".$disease." at ".$hospital.".\n\nKindly bring your Documents and Medical reports within a time period of 2 days at our blood bank.\n\nPlease Note that for providing you with blood we will be requiring atleast 2 letters along with signature and Stamp of the Head surgeon and his assistant as a proof.\n\nWish you a speedy recovery\nRegards,\nZindagiBachao Blood Bank.\n";

						$mailres = mail($email, $subject, $message);

						if($mailres){
							echo "Please wait for your Confirmation Mail...";					
						}else{
							echo "Some Error occured, Try again later.";
						}
					}else{

						$subject = "Blood Request";
						$message = "Dear ".$name.",\nWe are sorry to inform you that we do not possess the amount of blood bottles required by you for the treatement of ".$disease." at ".$hospital.".\n\n\"We must accept finite disappointment, but never lose infinite hope.\"\n --Martin Luther King, Jr.\n\n Please keep your hopes high and try again later.\n\nWish you a Speedy Recovery.\nRegards,\nZindagiBachao Blood Bank"; 

						$mailres = mail($email, $subject, $message);

						if($mailres){
							echo "Please wait for your Confirmation Mail...";					
						}else{
							echo "Some Error occured, Try again later.";
						}


					}
				}




				// $sql2 = "SELECT `email` FROM `donor_details` WHERE `bgroup` =  '$bloodgroup'";
				// $result2 = mysqli_query($conn,$sql2);
				// // $mail ="";
				// if(mysqli_num_rows($result2)>0){
				// 	$addresses = array();
				// 	while($row = $result2->fetch_assoc()){
				// 		$message = $name." need ".$bloodgroup." blood immediately at ".$hospital." You can help him as he is suffering from ".$disease." .His contact is ".$contact." and his email is ".$email." .If you can donate him blood, kindly contact him ";
				// 	$subject = "Urgent Blood required. ";
				// 	// $mail .= $row['email'].",";
				// 	array_push($addresses, $row['email']);
				// }
				// foreach ($addresses as $address) {
				// $res = mail($address,$subject,$message);	
				// }
				
				// 	if($res){
				// 		echo "Mail Sent to Donors having same blood group. Keep your hopes high maybe someone's gonna call. Good Luck.";
				// 	}else{
				// 		echo "Some error occured while sending emails to donors";
				// 	}
				// }else{
				// echo "No Donor matching your blood group found in our Database. Sorry for inconvienience";	
				// }
			}else{
				echo "Coudnt update our database at this moment Try again later";
			}
		}
		}
	}

	if(isset($_POST['feed'])){
		if(mysqli_connect_errno()){
			echo "Connection with Database Failed !";
		}else{
			$name  = mysqlI_real_escape_string($conn,$_POST['name']);
			$email  = mysqlI_real_escape_string($conn,$_POST['email']);
			$country  = mysqlI_real_escape_string($conn,$_POST['country']);
			$feedback  = mysqlI_real_escape_string($conn,$_POST['feedb']);
			if(empty($name)||empty($email)||empty($country)||empty($feedback)){
				echo "One or More fields is/are missing !";
			}else{
				$sql = "INSERT INTO `feedback`(`name`, `email`, `country`, `feedback`) VALUES ('$name','$email','$country','$feedback')";
				$resu = mysqli_query($conn,$sql);
				if($resu){
					echo "Thank You for your valuable feedback ";
				}else{
					echo "Some error occured, try again later.";
				}
			}
		}
	}

	if(isset($_POST['donorlogin'])){
		if (mysqli_connect_errno()) {
			echo "Connection with Database Failed !";
		}else{
			$email = mysqlI_real_escape_string($conn,$_POST['email']);
			$pass = mysqlI_real_escape_string($conn,$_POST['password']);

			if(empty($email)||empty($pass)){
				echo "One or more fields is/are missing !";
			}else{
				$encpass = md5($pass);
				$sqlque = "SELECT * FROM `donor_details` WHERE `email` = '$email' and `password`='$encpass'";
				$resultquer = mysqli_query($conn,$sqlque);
				if(mysqli_num_rows($resultquer)==1){
					$user = $resultquer->fetch_assoc();
					$_SESSION['name'] = $user['name'];
					$_SESSION['email'] = $user['email'];
					$_SESSION['address'] = $user['L_address'];
					$_SESSION['bgroup'] = $user['bgroup'];
					$_SESSION['phone'] = $user['phone'];
					header("location: donorprofile.php");
				}else{
					echo "Your Account Doesnt exists !";
					header("location: Donorlogin.php");
					session_destroy();
				}
			}
		}
	}
	

	if(isset($_POST['appointment'])){
		if(mysqli_connect_errno()){
			echo "Error Connecting to Database !";
		}else{
			$name =  mysqlI_real_escape_string($conn,$_POST['name']);
			$email = mysqlI_real_escape_string($conn,$_POST['email']);
			$bgroup = mysqlI_real_escape_string($conn,$_POST['bgroup']);
			$date =  $_POST['appointdate'];
			$venue = $_POST['local'];
			$slot = $_POST['slot'];
			if(empty($name)|| empty($date)||empty($venue)||empty($slot)){
				echo "One or more fields is/are missing";
			}else{

				$sql = "INSERT INTO `appointmentdetails`(`name`, `bloodgroup`, `booking`, `venue`, `slot`, `email`, `donated`) VALUES ('$name','$bgroup','$date','$venue','$slot','$email','NO')";
				$result = mysqli_query($conn,$sql);
				if($result){

					$message = "Hola,\n This is to inform you that your appointment for blood donation at ".$venue." is accepted  for ".$date.", ".$slot." time slot \nKindly be present on the same date positively.\nHappy Donating. Save a Life Become a Real Hero !";
					mail($email, 'Confirmation Mail', $message);

					echo "<script>
			alert('Request Updated check email for updation ');
			window.location.href='donorprofile.php';
			</script>";
				}else{
					echo "Network Error Try again Later !";
				}
			}
		}
	}

	if(isset($_POST['appointupdate'])){
		if(mysqli_connect_errno()){
			echo "Connection with database failed !";
		}else{
			$email = mysqlI_real_escape_string($conn,$_POST['email']);
			$bgroup = mysqlI_real_escape_string($conn,$_POST['bloodgroup']);
			$bookdate = $_POST['booking'];
			$donateconf = $_POST['confirmation'];
			$donatedate = $_POST['datedonated'];
			$bottles = $_POST['noofbot'];

			$sql = "UPDATE `appointmentdetails` SET `donatedon`='$donatedate',`donated`='$donateconf' WHERE `email` ='$email' and `bloodgroup`='$bgroup' and `booking`='$bookdate'";
			$result = mysqli_query($conn,$sql);
			if($result){
				$sql2 = "SELECT `bottles` FROM `bloodbottles` WHERE `bgroup`= '$bgroup'";
				$result2 = mysqli_query($conn,$sql2);
				if ($result2) {
					$row = $result2->fetch_assoc();
					$bottles +=$row['bottles'];

					$sql3 = "UPDATE `bloodbottles` SET`bottles`='$bottles' WHERE `bgroup`='$bgroup'";
					$result3 = mysqli_query($conn,$sql3);
					if($result3){
						$subject = "Thank you";
						$message = "Dear ".$email.",\n Thank you for taking out time from your busy schedule to become a valuable part of the small percentage of the world donors.\n\nBlood donation is the act of giving life. Your one hour spent in donating the blood is going to give life to someone in need. Your blood could save anyone from a little baby to an old individual. One cannot make blood, it is a gift we all have inside of us to give to those who are injured, sick, or in need. There's no doubt that the need is huge. However, the support of donors like you is helping us to make it possible to help the people in achieving a healthier, happier and fruitful life.\n\nIn spite of the various reasons, for donating blood and encouraging others to do it, there are only few who actually do it. Thanks for being a part of this group. Your act of noble kindness of volunteering blood donation will serve as an inspiration to other people.";
						$mailres = mail($email, $subject, $message);

						if($mailres){
							echo "<script>
			alert('Appointment Details, Blood bottles Updated and thank you mail sent to donor!');
			window.location.href='adminprofile.php';
			</script>";
						}else{
							echo "<script>
			alert('Appointment Details and Blood bottles Updated !');
			window.location.href='adminprofile.php';
			</script>";
						}
					}else{
						echo "<script>
			alert('Only Appointment Details Updated !');
			window.location.href='adminprofile.php';
			</script>";
					}

				}else{
					echo "YAHAN SCENE HAI BHAIYA !";
				}

				echo "<script>
			alert('Appointment Details Updated !');
			window.location.href='adminprofile.php';
			</script>";
			}else{
				echo "<script>
			alert('No records found !');
			window.location.href='adminprofile.php';
			</script>";
			}
		}
	}




	if(isset($_POST['adlogin'])){
		if(mysqli_connect_errno()){
			echo "Error connecting to database !";
		}else{
			$uname = mysqli_real_escape_string($conn,$_POST['username']);
			$password = mysqli_real_escape_string($conn,md5($_POST['password']));

			if(empty($uname)||empty($password)){
				echo "One or more fields is/are missing";
			}else{
				$sqlq = "SELECT `username`, `password` FROM `admin_details` WHERE `username` = '$uname' and `password` = '$password'";
				$qres = mysqli_query($conn,$sqlq);
				if(mysqli_num_rows($qres)==1){
					$aduser = $qres->fetch_assoc();
					$_SESSION['username'] = $aduser['username'];
					$_SESSION['success'] = "You are successfully Logged in !";
					
					header("location: adminprofile.php");
				}else{
					header("location: adminlogin.php");
					echo "No Buddy, you are not an admin";
					session_destroy();
				}
			}
		}
	}


	if(isset($_POST['addadminnew'])){
		if(mysqli_connect_errno()){
			echo "Connection with Database failed !";
		}else{
			$username = mysqli_real_escape_string($conn,$_POST['username']);
			$pass = mysqli_real_escape_string($conn,$_POST['password']);
			$cpass = mysqli_real_escape_string($conn,$_POST['cpass']);

			$usernamecheckquery = "SELECT `username` FROM `admin_details` WHERE `username`='$username'";
			$userqueryresult = mysqli_query($conn,$usernamecheckquery);
			if(mysqli_num_rows($userqueryresult)>0){
				echo "Username is Already Taken !";
			}else if(empty($username)||empty($pass)||empty($cpass)){
				echo "One or more fields is/are missing !";
			}else if ($pass != $cpass) {
				echo "Passwords doesnt match !";
			}else{
				$password = md5($pass);
				$sql = "INSERT INTO `admin_details`(`username`, `password`) VALUES ('$username','$password')";
				$result = mysqli_query($conn,$sql);
				if($result){
					echo "Admin Added Successfully.";
				}else{
					echo "Some Error Occured, Try again later !";
				}
			}
		}
	}

	if (isset($_POST['stockorder'])) {
		if (mysqli_connect_errno()) {
			echo "Connection with database failed !";
		}else{
			$syr = $_POST['syringe'];
			$cannula = $_POST['canula'];
			$band = $_POST['bandages'];
			$hema = $_POST['analyser'];
			$refrigerator = $_POST['refri'];
			$centri = $_POST['centrifuge'];
			$shaker = $_POST['plateletshaker'];
			$aggre = $_POST['aggregometer'];
			$pbfreezer = $_POST['freezer'];
			$bottles = $_POST['bottles'];

			$sql = "INSERT INTO `equiptmentrequest`(`syringe`, `cannuladrips`, `bandages`, `hematologyanalysers`, `bloodbankrefrigertors`, `microminicentrifuge`, `plateletshakers`, `aggregometer`, `plasmabloodfreezer`, `bloodbottles`) VALUES ('$syr','$cannula','$band','$hema','$refrigerator','$centri','$shaker','$aggre','$pbfreezer','$bottles')";

			$result = mysqli_query($conn,$sql);
			if($result){

				$subject = "Stock Order";
				$message = "Respected Sir/Madam,\nThis to inform you that our bank is running low on stock required for blood preservation and donation process. We thereby request you to send the following items by your earliest convienience.\n 1.Syringes : ".$syr."\n 2. Cannula Drips : ".$cannula."\n 3. Bandages : ".$band."\n 4. Hematology Analysers : ".$hema."\n 5.Blood Bank Refrigerator : ".$refrigerator."\n 6. Mini/Micro Centrifuge : ".$centri."\n 7. Platelet Shaker : ".$shaker."\n 8. Platelet Aggregometer : ".$aggre."\n 9. Plasma/Blood Freezer : ".$pbfreezer."\n 10. Blood bottles : ".$bottles." \nKindly please Send these required equipments as early as possible.\nThank You\nRegards,\nZindagiBachao Blood Bank";
				$mailres = mail('tangri57@gmail.com', $subject, $message);
				if($mailres){
					echo "Mail sent !";

				}else{
					echo "Mail not sent !";
				}
			}else{
				echo "Some error occured !";
			}
		}
	}

	if(isset($_POST['stockupdate'])){
		if (mysqli_connect_errno()) {
			echo "Connection with database failed !";
		}else{
			$sql = "SELECT `syringe`, `cannula`, `bandages`, `hematology analyser`, `blood bank refrigerator`, `micro/mini centrifuge`, `platelet shaker`, `platelet aggregometer`, `plasma blood freezer`, `blood bottles` FROM `equiptments` WHERE 1";
			$result = mysqli_query($conn,$sql);
			if($result){
				$row = $result->fetch_assoc();

				$syr = $_POST['syringe']+$row['syringe'];
			$cannula = $_POST['canula']+$row['cannula'];
			$band = $_POST['bandages']+$row['bandages'];
			$hema = $_POST['analyser']+$row['hematology analyser'];
			$refrigerator = $_POST['refri']+$row['blood bank refrigerator'];
			$centri = $_POST['centrifuge']+$row['micro/mini centrifuge'];
			$shaker = $_POST['plateletshaker']+$row['platelet shaker'];
			$aggre = $_POST['aggregometer']+$row['platelet aggregometer'];
			$pbfreezer = $_POST['freezer']+$row['plasma blood freezer'];
			$bottles = $_POST['bottles']+$row['blood bottles'];

			$sql2 = "UPDATE `equiptments` SET `syringe`='$syr',`cannula`='$cannula',`bandages`='$band',`hematology analyser`='$hema',`blood bank refrigerator`='$refrigerator',`micro/mini centrifuge`='$centri',`platelet shaker`='$shaker',`platelet aggregometer`='$aggre',`plasma blood freezer`='$pbfreezer',`blood bottles`='$bottles' WHERE 1";

			$result2 = mysqli_query($conn,$sql2);
			if($result2){
				echo "Inventory Updated !";
			}else{
				echo "Inventory Not Updated";
			}
			}else{
				echo "Some error occured";
			}
		}
	}

	if(isset($_POST['requestpatientupdate'])){
		if(mysqli_connect_errno()){
			echo "Connection with database failed !";
		}else{
			$name = mysqlI_real_escape_string($conn,$_POST['name']);
			$email = mysqlI_real_escape_string($conn,$_POST['email']);
			$address = mysqlI_real_escape_string($conn,$_POST['address']);
			$phone = mysqlI_real_escape_string($conn,$_POST['phone']);
			$bloodgroup = mysqlI_real_escape_string($conn,$_POST['bloodgroup']);
			$noofbot = mysqlI_real_escape_string($conn,$_POST['noofbot']);
			$hospital = mysqlI_real_escape_string($conn,$_POST['hospital']);
			$disease = mysqlI_real_escape_string($conn,$_POST['disease']);
			$addressproof = mysqlI_real_escape_string($conn,$_POST['addressproof']);
			$aadhar = mysqlI_real_escape_string($conn,$_POST['aadhar']);
			$bill = mysqlI_real_escape_string($conn,$_POST['bill']);


			if(empty($name)||empty($email)||empty($address)||empty($phone)||empty($bloodgroup)||empty($noofbot)||empty($hospital)||empty($disease)||empty($addressproof)||empty($aadhar)||empty($bill)){
				echo "One or more fields is/are missing";
			}else{

				$sql = "INSERT INTO `bloodgiventopatientrecord`(`name`, `email`, `address`, `contact`, `bloodgroup`, `no of bottles`, `hospital`, `disease`, `address proof`, `aadhar number`, `hospital bill reciept number`) VALUES ('$name','$email','$address','$phone','$bloodgroup','$noofbot','$hospital','$disease','$addressproof','$aadhar','$bill')";
				$result = mysqli_query($conn,$sql);

				if($result){
					$subject = "Blood bottle Requested";
					$message = "Dear ".$name.",\nWe are pleased to help you out in this difficult time. We all wish for your speedy recovery. Hope for the best.\n\nThis email confirms that you have got ".$noofbot." bottle(s) of ".$bloodgroup." bloodgroup.\n Please show this to your hospital surgeon and he/she will continue the process and blood pouches will be directly sent to the hospital where your treatement is going on currently.\n\nRegards,\nZindagiBachao Blood Bank.";
					
					$sql2 = "UPDATE `bloodbottles` SET `bottles`=`bottles`-'$noofbot' WHERE `bgroup`='$bloodgroup'";
					$result2 = mysqli_query($conn,$sql2);

					if($result2){
						$mailres =  mail($email, $subject, $message);
						if($mailres){
							echo "<script>
			alert('Patient request details, Blood bottles Updated and Confirmation mail sent to patient!');
			window.location.href='adminprofile.php';
			</script>";
						}else{
							echo "<script>
			alert('Patient request details, Blood bottles Updated and Confirmation mail not sent to patient!');
			window.location.href='adminprofile.php';
			</script>";	
						}


					}else{
						echo "Some error Occured !";
					}

				}

			}




		}
	}

	if(isset($_POST['adminpasschange'])){
		if(mysqli_connect_errno()){
			echo "Connection with database failed !";
		}else{
			$username = mysqlI_real_escape_string($conn,$_POST['username']);
			$old = mysqlI_real_escape_string($conn,$_POST['oldpass']);
			$new = mysqlI_real_escape_string($conn,$_POST['newpass']);
			$cpass = mysqlI_real_escape_string($conn,$_POST['cpass']);
			if(empty($username)||empty($old)||empty($new)||empty($cpass)){
				echo "One or more fields is/are missing !";
			}else{

				if($new != $cpass){
					echo "Passwords doesnt match !";
				}else{
					$oldp = md5($old);
					$sql = "SELECT `username`, `password` FROM `admin_details` WHERE `username`='$username'and `password` = '$oldp'";
				$result = mysqli_query($conn,$sql);

				if(mysqli_num_rows($result)==1){
					$newp = md5($new);
					$sql2 = "UPDATE `admin_details` SET `password`='$newp' WHERE `username`='$username'and `password` = '$oldp'";
					$result2 = mysqli_query($conn,$sql2);
					if($result2){
						echo "Password changed successfully !";
					}else{
						echo "Error changing password";
					}
				}else{
					echo "Account doesn't exists";
				}
				}
			}
		}
	}
	if(isset($_POST['donorpasschange'])){
		if(mysqli_connect_errno()){
			echo "Connection with database failed !";
		}else{
			$email = mysqlI_real_escape_string($conn,$_POST['email']);
			$old = mysqlI_real_escape_string($conn,$_POST['oldpass']);
			$new = mysqlI_real_escape_string($conn,$_POST['newpass']);
			$cpass = mysqlI_real_escape_string($conn,$_POST['cpass']);
			if(empty($email)||empty($old)||empty($new)||empty($cpass)){
				echo "One or more fields is/are missing !";
			}else{

				if($new != $cpass){
					echo "Passwords doesnt match !";
				}else{
					$oldp = md5($old);
					$sql = "SELECT `email`, `password` FROM `donor_details` WHERE `email`='$email'and `password` = '$oldp'";
				$result = mysqli_query($conn,$sql);

				if(mysqli_num_rows($result)==1){
					$newp = md5($new);
					$sql2 = "UPDATE `donor_details` SET `password`='$newp' WHERE `email`='$email'and `password` = '$oldp'";
					$result2 = mysqli_query($conn,$sql2);
					if($result2){
						echo "Password changed successfully !";
					}else{
						echo "Error changing password";
					}
				}else{
					echo "Account doesn't exists";
				}
				}
			}
		}
	}


	

	if(isset($_GET['logoutdonor'])){
  		session_destroy();
  		unset($_SESSION['name']);
  		header('location: Donorlogin.php');	
  	}
	//logging out script
  	if(isset($_GET['logout'])){
  		session_destroy();
  		unset($_SESSION['username']);
  		header('location: adminlogin.php');	
  	}
  	
?>