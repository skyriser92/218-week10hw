<!DOCTYPE html>
<head>
</head>
<body>
<div style="width:650px; margin:auto;">
<?php
error_reporting(E_ALL); ini_set('display_errors', '1');
class User{
	function User() {
		$servername = "sql2.njit.edu";
		$username = "jcm44";
		$password = "lq40ntX5";
		$dbname = "jcm44";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	$this->connection = $conn;
	}
	
//Display all users in database.... section	
	function displayAllUser() {
		$sql = "SELECT * FROM accounts";
		$result = $this->connection->query($sql);
		echo "Displays all users";
		echo '<table style="border-style: ridge; border-width:6px">';
		echo '<th style="text=align:center;font-weight:bold">ID</th>';
		echo '<th style="text=align:center;font-weight:bold">Email</th>';
		echo '<th style="text=align:center;font-weight:bold">First Name</th>';
		echo '<th style="text=align:center;font-weight:bold">Last Name</th>';
		echo '<th style="text=align:center;font-weight:bold">Phone</th>';
		echo '<th style="text=align:center;font-weight:bold">Birthday</th>';
		echo '<th style="text=align:center;font-weight:bold">Gender</th>';
		echo '<th style="text=align:center;font-weight:bold">Password</th>';
		echo '</tr>';
		
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>".$row["id"]."</td>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["fname"]."</td>";
			echo "<td>".$row["lname"]."</td>";
			echo "<td>".$row["phone"]."</td>";
			echo "<td>".$row["birthday"]."</td>";
			echo "<td>".$row["gender"]."</td>";
			echo "<td>".$row["password"]."</td>";
			echo "</tr>";
    	}
    	echo "</table>";
		echo "<br>";
	}

//Insert new user section
		function insertUser($id, $email, $fname, $lname, $phone, $birthday, $gender, $password) {
		$sql = "INSERT into accounts values('$id', '$email', '$fname', '$lname', '$phone', '$birthday', '$gender', '$password')";
		$result = $this->connection->query($sql);
		$sql = "SELECT * FROM accounts where id = '$id'";
		$result = $this->connection->query($sql);
		echo "Insert new record: <br>";
		echo '<table style="border-style: ridge; border-width:6px">';
		echo '<th style="text=align:center;font-weight:bold">ID</th>';
		echo '<th style="text=align:center;font-weight:bold">Email</th>';
		echo '<th style="text=align:center;font-weight:bold">First Name</th>';
		echo '<th style="text=align:center;font-weight:bold">Last Name</th>';
		echo '<th style="text=align:center;font-weight:bold">Phone</th>';
		echo '<th style="text=align:center;font-weight:bold">Birthday</th>';
		echo '<th style="text=align:center;font-weight:bold">Gender</th>';
		echo '<th style="text=align:center;font-weight:bold">Password</th>';
		echo '</tr>';
		
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>".$row["id"]."</td>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["fname"]."</td>";
			echo "<td>".$row["lname"]."</td>";
			echo "<td>".$row["phone"]."</td>";
			echo "<td>".$row["birthday"]."</td>";
			echo "<td>".$row["gender"]."</td>";
			echo "<td>".$row["password"]."</td>";
			echo "</tr>";
    	}
    	echo "</table>";
		echo "<br>";
	}
	
//Delete user section
	function deleteUser($id) {
		$sql = "SELECT * FROM accounts where id = '$id'";
		$result = $this->connection->query($sql);
		echo "Deleted record: <br>";
		echo '<table style="border-style: ridge; border-width:6px">';
		echo '<th style="text=align:center;font-weight:bold">ID</th>';
		echo '<th style="text=align:center;font-weight:bold">Email</th>';
		echo '<th style="text=align:center;font-weight:bold">First Name</th>';
		echo '<th style="text=align:center;font-weight:bold">Last Name</th>';
		echo '<th style="text=align:center;font-weight:bold">Phone</th>';
		echo '<th style="text=align:center;font-weight:bold">Birthday</th>';
		echo '<th style="text=align:center;font-weight:bold">Gender</th>';
		echo '<th style="text=align:center;font-weight:bold">Password</th>';
		echo '</tr>';
		
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>".$row["id"]."</td>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["fname"]."</td>";
			echo "<td>".$row["lname"]."</td>";
			echo "<td>".$row["phone"]."</td>";
			echo "<td>".$row["birthday"]."</td>";
			echo "<td>".$row["gender"]."</td>";
			echo "<td>".$row["password"]."</td>";
			echo "</tr>";
    	}
    	echo "</table>";
		echo "<br>";
		$sql = "DELETE FROM accounts where id = '$id'";
		$result = $this->connection->query($sql);
	}

	
//Update password section
	function updatePassword($id, $Npassword) {
		$sql = "update accounts set password = '$Npassword' where id = '$id'";
		$result = $this->connection->query($sql);
		$sql = "SELECT * FROM accounts where id = '$id'";
		$result = $this->connection->query($sql);
		echo "Updated record: <br>";
		echo '<table style="border-style: ridge; border-width:6px">';
		echo '<th style="text=align:center;font-weight:bold">ID</th>';
		echo '<th style="text=align:center;font-weight:bold">Email</th>';
		echo '<th style="text=align:center;font-weight:bold">First Name</th>';
		echo '<th style="text=align:center;font-weight:bold">Last Name</th>';
		echo '<th style="text=align:center;font-weight:bold">Phone</th>';
		echo '<th style="text=align:center;font-weight:bold">Birthday</th>';
		echo '<th style="text=align:center;font-weight:bold">Gender</th>';
		echo '<th style="text=align:center;font-weight:bold">Password</th>';
		echo '</tr>';
		
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>".$row["id"]."</td>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["fname"]."</td>";
			echo "<td>".$row["lname"]."</td>";
			echo "<td>".$row["phone"]."</td>";
			echo "<td>".$row["birthday"]."</td>";
			echo "<td>".$row["gender"]."</td>";
			echo "<td>".$row["password"]."</td>";
			echo "</tr>";
    	}
    	echo "</table>";
	}
}

//make user class and call functions
$user = new User();
$user->displayAllUser();
$user->insertUser(12, 'skyway@gmail.com', 'Sky', 'Fall', '210-080-0880', '1994-04-12', 'male', 'g0tMiLk');
$user->deleteUser(12);
$user->updatePassword(10, 'sUppEr');
?>
</div>
</html>