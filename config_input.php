<?php
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "homespeak";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connection failed. " . mysqli_connect_error());
	}

	$id = "HS0001";
	$input1 = $_GET["input1"];
	$input2 = $_GET["input2"];
	$input3 = $_GET["input3"];
	$input4 = $_GET["input4"];
	$input5 = $_GET["input5"];
	$input6 = $_GET["input6"];
	$input7 = $_GET["input7"];
	$input8 = $_GET["input8"];

	$sql = "UPDATE controllers SET input1 = '" . $input1 . "', input2 = '" . $input2 . "', input3 = '" . $input3 . "', input4 = '" . $input4 . "', input5 = '" . $input5 . "', input6 = '" . $input6 . "', input7 = '" . $input7 . "', input8 = '" . $input8 . "' WHERE id = '" . $id . "'";
	$result = mysqli_query($conn, $sql);

	if ($result) {
		echo "Success";
	}
	else {
		echo "Error";
	}

	mysqli_close($conn);
?>