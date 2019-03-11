<?php
	if (isset($_POST['datacheck'])) {
		if (mysqli_connect_errno()) {
			echo "Connection with database Failed !";
		}else{
			$username = mysqlI_real_escape_string($conn,$_POST['username']);
			if(empty($username)){
				echo "Please atleast enter the only field asked !";
			}else{
				$sql = "SELECT `username`, `password` FROM `admin_details` WHERE `username` = '$username'";
				$result = mysqli_query($conn,$sql);
				$row = $result->fetch_assoc();
				if(mysqli_num_rows($result)>0){
					
					switch ($_POST['tablename']) {
						case '1':
								$sql2 = "SELECT `syringe`, `cannula`, `bandages`, `hematology analyser`, `blood bank refrigerator`, `micro/mini centrifuge`, `platelet shaker`, `platelet aggregometer`, `plasma blood freezer`, `blood bottles` FROM `equiptments` WHERE 1";
								$result2 = mysqli_query($conn,$sql2);
								if($result2){
									$row2 = $result2->fetch_assoc();
								
								$sql3 = "INSERT INTO `dataaccesedby`(`username`, `tableaccessed`) VALUES ('$username','Equipments database checked')";
								$result3 = mysqli_query($conn,$sql3);
					
									if($result3){
										echo "<table border='1'>
											<tr>
											<th>Equipment Name</th>
											<th>Quantity</th>
											</tr>";
										
											echo "<tr>";
											echo "<td> Syringes </td>";
											echo "<td>" . $row2['syringe'] . "</td>";
											echo "</tr>"; 

											echo "<tr>";
											echo "<td> Cannula Drips</td>";
											echo "<td>" . $row2['cannula'] . "</td>";
											echo "</tr>"; 

											echo "<tr>";
											echo "<td> Bandages </td>";
											echo "<td>" . $row2['bandages'] . "</td>";
											echo "</tr>"; 

											echo "<tr>";
											echo "<td> Hematology analyser </td>";
											echo "<td>" . $row2['hematology analyser'] . "</td>";
											echo "</tr>"; 

											echo "<tr>";
											echo "<td> Blood bank refrigerator </td>";
											echo "<td>" . $row2['blood bank refrigerator'] . "</td>";
											echo "</tr>"; 

											echo "<tr>";
											echo "<td> Micro/mini centrifuge </td>";
											echo "<td>" . $row2['micro/mini centrifuge'] . "</td>";
											echo "</tr>"; 

											echo "<tr>";
											echo "<td> Platelet shaker </td>";
											echo "<td>" . $row2['platelet shaker'] . "</td>";
											echo "</tr>"; 

											echo "<tr>";
											echo "<td> Platelet aggregometer </td>";
											echo "<td>" . $row2['platelet aggregometer'] . "</td>";
											echo "</tr>"; 

											echo "<tr>";
											echo "<td> Plasma blood freezer </td>";
											echo "<td>" . $row2['plasma blood freezer'] . "</td>";
											echo "</tr>"; 

											echo "<tr>";
											echo "<td> Blood bottles </td>";
											echo "<td>" . $row2['blood bottles'] . "</td>";
											echo "</tr>"; 
									
									}else{
										echo "Some Error occured";
									}
								}else{
									echo "Error in Connecting to database !";
								}

							break;
						case '2':
							$sql4 = "SELECT `bgroup`, `bottles` FROM `bloodbottles` WHERE 1";
							$result4 = mysqli_query($conn,$sql4);

							if($result4){
								$sql5 = "INSERT INTO `dataaccesedby`(`username`, `tableaccessed`) VALUES ('$username','Blood Bottles Stock Checked ')";
								$result5 = mysqli_query($conn,$sql5);
								if($result5){	
									echo "<table border='1'>
											<tr>
											<th>Group Name</th>
											<th>Pouches Availables</th>
											</tr>";
										while($row4 = $result4->fetch_assoc()){
											echo "<tr>";
											echo "<td>" . $row4['bgroup'] . "</td>";
											echo "<td>" . $row4['bottles'] . "</td>";
											echo "</tr>"; 
										}
								}else{
									echo "Some error occured";
								}
							}else{
								echo "Error connecting to database ";
							}

							break;
					case '3':
							$sql6 = "SELECT `name`, `bloodgroup`, `booking`, `donatedon`, `Entry Date and Time`, `email`, `donated` FROM `appointmentdetails` WHERE 1";
							$result6 = mysqli_query($conn,$sql6);
							if($result6){
								$sql5 = "INSERT INTO `dataaccesedby`(`username`, `tableaccessed`) VALUES ('$username','All Appointment Details checked')";
								$result5 = mysqli_query($conn,$sql5);
								if($result5){	
									echo "<table border='1'>
											<tr>
											<th>Name</th>
											<th>Bloodgroup</th>
											<th>Booking Date</th>
											<th>Donated On</th>
											<th>Timestamp</th>
											<th>Email id</th>
											<th>Donated Blood</th>
											</tr>";
										while($row = $result6->fetch_assoc()){
											echo "<tr>";
											echo "<td>" . $row['name'] . "</td>";
											echo "<td>" . $row['bloodgroup'] . "</td>";
											echo "<td>" . $row['booking'] . "</td>";
											echo "<td>" . $row['donatedon'] . "</td>";
											echo "<td>" . $row['Entry Date and Time'] . "</td>";
											echo "<td>" . $row['email'] . "</td>";
											echo "<td>" . $row['donated'] . "</td>";
											echo "</tr>"; 
										}

								}
							}

							break;
						case '4':
								
								$sql = "SELECT `name`, `email`,  `P_address`, `bgroup`, `phone`,  `state` FROM `donor_details` WHERE 1";
								$result = mysqli_query($conn,$sql);
								if($result){
									$sql5 = "INSERT INTO `dataaccesedby`(`username`, `tableaccessed`) VALUES ('$username','Donor details accessed')";
								$result5 = mysqli_query($conn,$sql5);
								if($result5){
									echo "<table border='1'>
											<tr>
											<th>Name</th>
											<th>Bloodgroup</th>
											<th>Address</th>
											<th>State</th>
											<th>Email id</th>
											<th>Contact Number</th>
											
											</tr>";
										while($row = $result->fetch_assoc()){
											echo "<tr>";
											echo "<td>" . $row['name'] . "</td>";
											echo "<td>" . $row['bgroup'] . "</td>";
											echo "<td>" . $row['P_address'] . "</td>";
											echo "<td>" . $row['state'] . "</td>";
											echo "<td>" . $row['email'] . "</td>";
											echo "<td>" . $row['phone'] . "</td>";
											echo "</tr>"; 
										}

								}else{
									echo "Some Error Occured !";
								}	
								 
								}else{
									echo "Connection with database failed !";
								}

							break;	
						case '5':
								$sql = "SELECT `username`, `password` FROM `admin_details` WHERE 1";
								$result = mysqli_query($conn,$sql);
								if($result){
									$sql5 = "INSERT INTO `dataaccesedby`(`username`, `tableaccessed`) VALUES ('$username','Admin details accessed')";
								$result5 = mysqli_query($conn,$sql5);
								if($result5){
										echo "<table border='1'>
											<tr>
											<th>User Name</th>
											<th>Password (encrypted)</th>
											</tr>";
										while($row = $result->fetch_assoc()){
											echo "<tr>";
											echo "<td>" . $row['username'] . "</td>";
											echo "<td>" . $row['password'] . "</td>";
											echo "</tr>"; 
										}
								}else{
									echo "Some error Occured !";
								}

								}else{
									echo "Error connecting with database";
								}
							break;
						case '6':
								

								$sql = "SELECT `name`, `email`, `bgroup`,`phone`, `disease`, `hospital`, `room`, `no of bottles`, `Date and Time of Request` FROM `patient_details` WHERE 1";
								$result = mysqli_query($conn,$sql);
								if($result){
									$sql5 = "INSERT INTO `dataaccesedby`(`username`, `tableaccessed`) VALUES ('$username','Patient details accessed')";
								$result5 = mysqli_query($conn,$sql5);
								if($result5){
										echo "<table border='1'>
											<tr>
											<th>Name</th>
											<th>Email</th>
											<th>Bloodgroup</th>
											<th>Contact Number</th>
											<th>Disease</th>
											<th>Hospital</th>
											<th>Room</th>
											<th>Boottles requested</th>
											<th>Requested On:</th>
											
											</tr>";
										while($row = $result->fetch_assoc()){
											echo "<tr>";
											echo "<td>" . $row['name'] . "</td>";
											echo "<td>" . $row['email'] . "</td>";
											echo "<td>" . $row['bgroup'] . "</td>";
											echo "<td>" . $row['phone'] . "</td>";
											echo "<td>" . $row['disease'] . "</td>";
											echo "<td>" . $row['hospital'] . "</td>";
											echo "<td>" . $row['room'] . "</td>";
											echo "<td>" . $row['no of bottles'] . "</td>";
											echo "<td>" . $row['Date and Time of Request'] . "</td>";
											echo "</tr>"; 
										}

								}else{
									echo "Some error occured";
								}
								}else{
									echo "Error connecting with Database";
								}
							break;
						case '7':
								
								$sql = "SELECT `name`, `email`, `address`, `contact`, `bloodgroup`, `no of bottles`, `hospital`, `disease`, `aadhar number`, `hospital bill reciept number`, `Date and Time of Giving blood` FROM `bloodgiventopatientrecord` WHERE 1";
								$result = mysqli_query($conn,$sql);
								if($result){
										$sql5 = "INSERT INTO `dataaccesedby`(`username`, `tableaccessed`) VALUES ('$username','Requests for blood database accessed')";
								$result5 = mysqli_query($conn,$sql5);
									if($result5){
										echo "<table border='1'>
											<tr>
											<th>Name</th>
											<th>Email</th>
											<th>Bloodgroup</th>
											<th>Contact Number</th>
											<th>Disease</th>
											<th>Hospital</th>
											<th>Address</th>
											<th>Bottles Given</th>
											<th>Blood given On</th>
											<th>Aadhar Number</th>
											<th>Hospital Bill Number</th> 
											
											</tr>";
										while($row = $result->fetch_assoc()){
											echo "<tr>";
											echo "<td>" . $row['name'] . "</td>";
											echo "<td>" . $row['email'] . "</td>";
											echo "<td>" . $row['bloodgroup'] . "</td>";
											echo "<td>" . $row['contact'] . "</td>";
											echo "<td>" . $row['disease'] . "</td>";
											echo "<td>" . $row['hospital'] . "</td>";
											echo "<td>" . $row['address'] . "</td>";
											echo "<td>" . $row['no of bottles'] . "</td>";
											echo "<td>" . $row['Date and Time of Giving blood'] . "</td>";
											echo "<td>" . $row['aadhar number'] . "</td>";
											echo "<td>" . $row['hospital bill reciept number'] . "</td>";
											
											echo "</tr>"; 
										}	
									}else{
										echo "Some Error Occured !";
									}
								}else{
									echo "Error Connecting with Database";
								}

							break;					
						default:
							# code...
							break;
					}
				}else{
					echo "Not a Valid Admin Username,Is something fishy at your end ?";
				}



			}
		}
	}

?>