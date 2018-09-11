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
	$output1 = $_GET["output1"];
	$output2 = $_GET["output2"];
	$output3 = $_GET["output3"];
	$output4 = $_GET["output4"];
	$output5 = $_GET["output5"];
	$output6 = $_GET["output6"];
	$output7 = $_GET["output7"];
	$output8 = $_GET["output8"];

	$sql = "UPDATE controllers SET output1 = '" . $output1 . "', output2 = '" . $output2 . "', output3 = '" . $output3 . "', output4 = '" . $output4 . "', output5 = '" . $output5 . "', output6 = '" . $output6 . "', output7 = '" . $output7 . "', output8 = '" . $output8 . "' WHERE id = '" . $id . "'";
	$result = mysqli_query($conn, $sql);

	if ($result) {
		echo "Success";
	}
	else {
		echo "Error";
	}

	mysqli_close($conn);
?>