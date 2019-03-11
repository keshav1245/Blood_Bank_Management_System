<?php
	$conn = mysqli_connect("localhost","root","","BBMS");

	if(isset($_POST['history'])){
		if(mysqli_connect_errno()){
			echo "Connection with database failed !";
		}else{
			$email = mysqli_real_escape_string($conn,$_POST['email']);
			if(empty($email)){
				echo "Email is missing !";
			}else{
				$sql = "SELECT `name`, `bloodgroup`, `booking`,`venue`, `slot`, `donatedon`, `email`, `donated` FROM `appointmentdetails` WHERE `email` = '$email' and `donated` = 'YES'";
				$result = mysqli_query($conn,$sql);
				if($result){
					echo "<table border='1'>
						<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Bloodgroup</th>
						<th>Donated On</th>
						<th>Venue</th>
						</tr>";
					while($row = $result->fetch_assoc()){
						echo "<tr>";
						echo "<td>" . $row['name'] . "</td>";
						echo "<td>" . $row['email'] . "</td>";
						echo "<td>" . $row['bloodgroup'] . "</td>";
						echo "<td>" . $row['donatedon'] . "</td>";
						echo "<td>" . $row['venue'] . "</td>";
						echo "</tr>"; 
					}
				}
				
			}

		}
	}

	if(isset($_POST['pending'])){
		if (mysqli_connect_errno()) {
			echo "Connection with Database Failed !";
		}else{
			$username = mysqli_real_escape_string($conn,$_POST['username']);
			if(empty($username)){
				echo "username is missing";
			}else{
				$sql = "SELECT `name`, `bloodgroup`, `booking`, `email`, `donated` FROM `appointmentdetails` WHERE `donated` = 'NO'";
				$result = mysqli_query($conn,$sql);
				if($result){
					$sql2 = "INSERT INTO `dataaccesedby`(`username`, `tableaccessed`) VALUES ('$username','pending appointments')";
					$result2 = mysqli_query($conn,$sql2);
					if($result2){
						echo "<table border='1'>
						<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Bloodgroup</th>
						<th>Booked On</th>
						<th>Status(Donated)</th>
						</tr>";
					while($row = $result->fetch_assoc()){
						echo "<tr>";
						echo "<td>" . $row['name'] . "</td>";
						echo "<td>" . $row['email'] . "</td>";
						echo "<td>" . $row['bloodgroup'] . "</td>";
						echo "<td>".$row['booking']."</td>";
						echo "<td>" . $row['donated'] . "</td>";
						echo "</tr>"; 
					}
						echo "Data Fetched Successfuly";
					}else{
						echo "Error in accessing data !";
					}
					
				}else{
					echo "Error in accessing Data !";
				}
			}
		}
	}
?>