<?php
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "homespeak";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connection failed. " . mysqli_connect_error());
	}
	
	if (isset($_GET["time"]) && isset($_GET["id"]) && isset($_GET["ext_no"]) && isset($_GET["type"]) && isset($_GET["data"])) {
	    $time = $_GET["time"];
		$id = $_GET["id"];
		$ext_no = $_GET["ext_no"];
		$type = $_GET["type"];
		$data = $_GET["data"];

		//echo $time . " " . $id . " " . $ext_no . " " . $type . " " . $data;

		$sql = "INSERT INTO ext_logs (time, id, ext_no, type, data) VALUES ('" . $time . "', '" . $id . "', '" . $ext_no . "', '" . $type . "', '" . $data . "')";

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