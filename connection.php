 <?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "HR";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    return NULL;
}
else{
	echo "Connected successfully";
	return $conn;	
}

?> 