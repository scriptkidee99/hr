<?php
$conn = require "connection.php";
$sql = "SELECT * FROM employee";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_assoc($result)){
		echo $row["employee_id"]."<br>";
	}
}
?>