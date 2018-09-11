<?php
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "homespeak";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connection failed. " . mysqli_connect_error());
	}
	
	if (isset($_GET["time"]) && isset($_GET["id"]) && isset($_GET["data"])) {
	    $time = $_GET["time"];
		$id = $_GET["id"];
		$data = $_GET["data"];

		//echo $time . " " . $id . " " . $data;

		$sql = "INSERT INTO io_logs (time, id, data) VALUES ('" . $time . "', '" . $id . "', '" . $data . "')";

		if (mysqli_query($conn, $sql)) {
			echo "Success";
		}
		else {
			//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			echo "Error";
		}
	}
	else {
	    echo "DNF"; //Data not found
	}
	
	mysqli_close($conn);
?>