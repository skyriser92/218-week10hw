<!DOCTYPE html>
<html>
<body>

<?php
error_reporting(E_ALL); ini_set('display_errors', '1');
echo "<table style='border: solid 1px black;'>";
 echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th><th>Password</th></tr>";

// Start new class

class user { 
    function __construct() { 
		$this->display();
		$this->insert();
		$this->erase();
		$this->update();
    }

    function display() {
		// connect to database
		$servername = "sql2.njit.edu";
		$username = "jcm44";
		$password = "lq40ntX5";
		$dbname = "jcm44";

		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		echo "Connected Successfully! <br>";
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// End connect to database
        $stmt = $conn->prepare("SELECT id, fname, lname, password FROM accounts"); 
		$stmt->execute();

		// set the resulting array to associative
		//$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->fetch(PDO::FETCH_ASSOC);
		foreach ($result = $stmt->fetch()) {
		echo $result['id'];
		echo $result['fname'];
		echo $result['lname'];
		echo $result['password'];
		}
    }

    function insert() { 
	/*
        $sql = "INSERT INTO accounts (fname, lname, email, phone, password)
		VALUES ('John', 'Dean', 'jdean@gmail.com', 'Nacho')";
		// use exec() because no results are returned
		$conn->exec($sql);
		echo "New record created successfully";
		$this->display();
		*/
    } 

    function erase() { 
        
    }
	
	function update() { 
        
    } 
}


/*
    $stmt = $conn->prepare("SELECT id, fname, lname FROM accounts WHERE id < 6"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
*/


echo "</table>";

$john = new user();

?> 

</body>
</html>