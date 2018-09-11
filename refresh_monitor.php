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

	$last_time = "";
	$io_data = "";
	$sql = "SELECT time, data FROM io_logs WHERE id = '" . $id . "' ORDER BY no DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);

	if ($result) {
		$row = mysqli_fetch_assoc($result);
		$last_time = $row["time"];
		$io_data = $row["data"];
	}
	else {
		echo "Error";
	}

	$controller_name = "";
	$input1 = "";
	$input2 = "";
	$input3 = "";
	$input4 = "";
	$input5 = "";
	$input6 = "";
	$input7 = "";
	$input8 = "";
	$output1 = "";
	$output2 = "";
	$output3 = "";
	$output4 = "";
	$output5 = "";
	$output6 = "";
	$output7 = "";
	$output8 = "";
	$extender1 = "";
	$extender2 = "";
	$extender3 = "";
	$extender4 = "";
	$sql2 = "SELECT * FROM controllers WHERE id = '" . $id . "'";
	$result2 = mysqli_query($conn, $sql2);

	if ($result2) {
		$row = mysqli_fetch_assoc($result2);
		$controller_name = $row["name"];
		$input1 = $row["input1"];
		$input2 = $row["input2"];
		$input3 = $row["input3"];
		$input4 = $row["input4"];
		$input5 = $row["input5"];
		$input6 = $row["input6"];
		$input7 = $row["input7"];
		$input8 = $row["input8"];
		$output1 = $row["output1"];
		$output2 = $row["output2"];
		$output3 = $row["output3"];
		$output4 = $row["output4"];
		$output5 = $row["output5"];
		$output6 = $row["output6"];
		$output7 = $row["output7"];
		$output8 = $row["output8"];
		$extender1 = $row["extender1"];
		$extender2 = $row["extender2"];
		$extender3 = $row["extender3"];
		$extender4 = $row["extender4"];
	}

?>

<h4><?php echo "Server time: " . date("d / m / Y - H:i:s", strtotime($last_time)); ?></h4>

<h4>Input</h4>

<?php //input 1
	$split_input1 = explode(",", $input1);
	$color_input1 = "w3-dark-grey";
	if ($split_input1[1] == "1") {
		if ($io_data[0] == "1") {
			$color_input1 = "w3-green";
		}
		else {
			$color_input1 = "w3-blue-grey";
		}
	}
	else {
		$color_input1 = "w3-dark-grey";
	}
?>
<div class="io-box w3-padding-16 w3-center <?php echo $color_input1; ?>">
	<h6><?php echo $split_input1[0]; ?></h6>
	<i class="far fa-sun fa-5x"></i>
	<p></p>
</div>

<?php //input 2
	$split_input2 = explode(",", $input2);
	$color_input2 = "w3-dark-grey";
	if ($split_input2[1] == "1") {
		if ($io_data[1] == "1") {
			$color_input2 = "w3-green";
		}
		else {
			$color_input2 = "w3-blue-grey";
		}
	}
	else {
		$color_input2 = "w3-dark-grey";
	}
?>
<div class="io-box w3-padding-16 w3-center <?php echo $color_input2; ?>">
	<h6><?php echo $split_input2[0]; ?></h6>
	<i class="far fa-sun fa-5x"></i>
	<p></p>
</div>

<?php //input 3
	$split_input3 = explode(",", $input3);
	$color_input3 = "w3-dark-grey";
	if ($split_input3[1] == "1") {
		if ($io_data[2] == "1") {
			$color_input3 = "w3-green";
		}
		else {
			$color_input3 = "w3-blue-grey";
		}
	}
	else {
		$color_input3 = "w3-dark-grey";
	}
?>
<div class="io-box w3-padding-16 w3-center <?php echo $color_input3; ?>">
	<h6><?php echo $split_input3[0]; ?></h6>
	<i class="far fa-sun fa-5x"></i>
	<p></p>
</div>

<?php //input 4
	$split_input4 = explode(",", $input4);
	$color_input4 = "w3-dark-grey";
	if ($split_input4[1] == "1") {
		if ($io_data[3] == "1") {
			$color_input4 = "w3-green";
		}
		else {
			$color_input4 = "w3-blue-grey";
		}
	}
	else {
		$color_input4 = "w3-dark-grey";
	}
?>
<div class="io-box w3-padding-16 w3-center <?php echo $color_input4; ?>">
	<h6><?php echo $split_input4[0]; ?></h6>
	<i class="far fa-sun fa-5x"></i>
	<p></p>
</div>

<?php //input 5
	$split_input5 = explode(",", $input5);
	$color_input5 = "w3-dark-grey";
	if ($split_input5[1] == "1") {
		if ($io_data[4] == "1") {
			$color_input5 = "w3-green";
		}
		else {
			$color_input5 = "w3-blue-grey";
		}
	}
	else {
		$color_input5 = "w3-dark-grey";
	}
?>
<div class="io-box w3-padding-16 w3-center <?php echo $color_input5; ?>">
	<h6><?php echo $split_input5[0]; ?></h6>
	<i class="far fa-sun fa-5x"></i>
	<p></p>
</div>

<?php //input 6
	$split_input6 = explode(",", $input6);
	$color_input6 = "w3-dark-grey";
	if ($split_input6[1] == "1") {
		if ($io_data[5] == "1") {
			$color_input6 = "w3-green";
		}
		else {
			$color_input6 = "w3-blue-grey";
		}
	}
	else {
		$color_input6 = "w3-dark-grey";
	}
?>
<div class="io-box w3-padding-16 w3-center <?php echo $color_input6; ?>">
	<h6><?php echo $split_input6[0]; ?></h6>
	<i class="far fa-sun fa-5x"></i>
	<p></p>
</div>

<?php //input 7
	$split_input7 = explode(",", $input7);
	$color_input7 = "w3-dark-grey";
	if ($split_input7[1] == "1") {
		if ($io_data[6] == "1") {
			$color_input7 = "w3-green";
		}
		else {
			$color_input7 = "w3-blue-grey";
		}
	}
	else {
		$color_input7 = "w3-dark-grey";
	}
?>
<div class="io-box w3-padding-16 w3-center <?php echo $color_input7; ?>">
	<h6><?php echo $split_input7[0]; ?></h6>
	<i class="far fa-sun fa-5x"></i>
	<p></p>
</div>

<?php //input 8
	$split_input8 = explode(",", $input8);
	$color_input8 = "w3-dark-grey";
	if ($split_input8[1] == "1") {
		if ($io_data[7] == "1") {
			$color_input8 = "w3-green";
		}
		else {
			$color_input8 = "w3-blue-grey";
		}
	}
	else {
		$color_input8 = "w3-dark-grey";
	}
?>
<div class="io-box w3-padding-16 w3-center <?php echo $color_input8; ?>">
	<h6><?php echo $split_input8[0]; ?></h6>
	<i class="far fa-sun fa-5x"></i>
	<p></p>
</div>


<!--<div class="io-box w3-padding-16 w3-center <?php //if ($io_data[1] == "1") echo "w3-green"; else echo "w3-dark-grey"; ?>">
	<h6><?php //echo $input2; ?></h6>
	<i class="fab fa-hotjar fa-5x"></i>
	<p></p>
</div>

<div class="io-box w3-padding-16 w3-center <?php //if ($io_data[2] == "1") echo "w3-green"; else echo "w3-dark-grey"; ?>">
	<h6><?php //echo $input3; ?></h6>
	<i class="far fa-thermometer-half fa-5x"></i>
	<p></p>
</div>

<div class="io-box w3-padding-16 w3-center <?php //if ($io_data[3] == "1") echo "w3-green"; else echo "w3-dark-grey"; ?>">
	<h6><?php //echo $input4; ?></h6>
	<i class="far fa-tachometer-alt fa-5x"></i>
	<p></p>
</div>

<div class="io-box w3-padding-16 w3-center <?php //if ($io_data[4] == "1") echo "w3-green"; else echo "w3-dark-grey"; ?>">
	<h6><?php //echo $input5; ?></h6>
	<i class="far fa-sun fa-5x"></i>
	<p></p>
</div>

<div class="io-box w3-padding-16 w3-center <?php //if ($io_data[5] == "1") echo "w3-green"; else echo "w3-dark-grey"; ?>">
	<h6><?php //echo $input6; ?></h6>
	<i class="fab fa-hotjar fa-5x"></i>
	<p></p>
</div>

<div class="io-box w3-padding-16 w3-center <?php //if ($io_data[6] == "1") echo "w3-green"; else echo "w3-dark-grey"; ?>">
	<h6><?php //echo $input7; ?></h6>
	<i class="far fa-thermometer-half fa-5x"></i>
	<p></p>
</div>

<div class="io-box w3-padding-16 w3-center <?php //if ($io_data[7] == "1") echo "w3-green"; else echo "w3-dark-grey"; ?>">
	<h6><?php //echo $input8; ?></h6>
	<i class="far fa-tachometer-alt fa-5x"></i>
	<p></p>
</div>-->

<div class="w3-clear"></div>

<br>

<h4>Output</h4>

<?php //output 1
	$split_output1 = explode(",", $output1);
	$color_output1 = "w3-dark-grey";
	if ($split_output1[1] == "0") {
		$color_output1 = "w3-dark-grey";
	}
	else {
		if ($io_data[8] == "1") {
			$color_output1 = "w3-green";
		}
		else {
			$color_output1 = "w3-blue-grey";
		}
	}
?>
<div class="io-box w3-padding-16 w3-center <?php echo $color_output1; ?>">
	<h6><?php echo $split_output1[0]; ?></h6>
	<i class="far fa-lightbulb fa-3x"></i>
	<p>Activated By:
		<?php
			if ($split_output1[1] == "1") {
				echo "Time<br>";
				echo $split_output1[2] . ".00 - " . $split_output1[3] . ".00";
			}
			else if ($split_output1[1] == "2") {
				echo "<br>";
				$input_no = (int) $split_output1[4] + 1;
				echo "Input " . $input_no;
			}
			else {
				echo "<br>-";
			}
		?>
	</p>
</div>

<?php //output 2
	$split_output2 = explode(",", $output2);
	$color_output2 = "w3-dark-grey";
	if ($split_output2[1] == "0") {
		$color_output2 = "w3-dark-grey";
	}
	else {
		if ($io_data[9] == "1") {
			$color_output2 = "w3-green";
		}
		else {
			$color_output2 = "w3-blue-grey";
		}
	}
?>
<div class="io-box w3-padding-16 w3-center <?php echo $color_output2; ?>">
	<h6><?php echo $split_output2[0]; ?></h6>
	<i class="far fa-lightbulb fa-3x"></i>
	<p>Activated By:
		<?php
			if ($split_output2[1] == "1") {
				echo "Time<br>";
				echo $split_output2[2] . ".00 - " . $split_output2[3] . ".00";
			}
			else if ($split_output2[1] == "2") {
				echo "<br>";
				$input_no = (int) $split_output2[4] + 1;
				echo "Input " . $input_no;
			}
			else {
				echo "<br>-";
			}
		?>
	</p>
</div>

<?php //output 3
	$split_output3 = explode(",", $output3);
	$color_output3 = "w3-dark-grey";
	if ($split_output3[1] == "0") {
		$color_output3 = "w3-dark-grey";
	}
	else {
		if ($io_data[10] == "1") {
			$color_output3 = "w3-green";
		}
		else {
			$color_output3 = "w3-blue-grey";
		}
	}
?>
<div class="io-box w3-padding-16 w3-center <?php echo $color_output3; ?>">
	<h6><?php echo $split_output3[0]; ?></h6>
	<i class="far fa-lightbulb fa-3x"></i>
	<p>Activated By:
		<?php
			if ($split_output3[1] == "1") {
				echo "Time<br>";
				echo $split_output3[2] . ".00 - " . $split_output3[3] . ".00";
			}
			else if ($split_output3[1] == "2") {
				echo "<br>";
				$input_no = (int) $split_output3[4] + 1;
				echo "Input " . $input_no;
			}
			else {
				echo "<br>-";
			}
		?>
	</p>
</div>

<?php //output 4
	$split_output4 = explode(",", $output4);
	$color_output4 = "w3-dark-grey";
	if ($split_output4[1] == "0") {
		$color_output4 = "w3-dark-grey";
	}
	else {
		if ($io_data[11] == "1") {
			$color_output4 = "w3-green";
		}
		else {
			$color_output4 = "w3-blue-grey";
		}
	}
?>
<div class="io-box w3-padding-16 w3-center <?php echo $color_output4; ?>">
	<h6><?php echo $split_output4[0]; ?></h6>
	<i class="far fa-lightbulb fa-3x"></i>
	<p>Activated By:
		<?php
			if ($split_output4[1] == "1") {
				echo "Time<br>";
				echo $split_output4[2] . ".00 - " . $split_output4[3] . ".00";
			}
			else if ($split_output4[1] == "2") {
				echo "<br>";
				$input_no = (int) $split_output4[4] + 1;
				echo "Input " . $input_no;
			}
			else {
				echo "<br>-";
			}
		?>
	</p>
</div>

<?php //output 5
	$split_output5 = explode(",", $output5);
	$color_output5 = "w3-dark-grey";
	if ($split_output5[1] == "0") {
		$color_output5 = "w3-dark-grey";
	}
	else {
		if ($io_data[12] == "1") {
			$color_output5 = "w3-green";
		}
		else {
			$color_output5 = "w3-blue-grey";
		}
	}
?>
<div class="io-box w3-padding-16 w3-center <?php echo $color_output5; ?>">
	<h6><?php echo $split_output5[0]; ?></h6>
	<i class="far fa-lightbulb fa-3x"></i>
	<p>Activated By:
		<?php
			if ($split_output5[1] == "1") {
				echo "Time<br>";
				echo $split_output5[2] . ".00 - " . $split_output5[3] . ".00";
			}
			else if ($split_output5[1] == "2") {
				echo "<br>";
				$input_no = (int) $split_output5[4] + 1;
				echo "Input " . $input_no;
			}
			else {
				echo "<br>-";
			}
		?>
	</p>
</div>

<?php //output 6
	$split_output6 = explode(",", $output6);
	$color_output6 = "w3-dark-grey";
	if ($split_output6[1] == "0") {
		$color_output6 = "w3-dark-grey";
	}
	else {
		if ($io_data[13] == "1") {
			$color_output6 = "w3-green";
		}
		else {
			$color_output6 = "w3-blue-grey";
		}
	}
?>
<div class="io-box w3-padding-16 w3-center <?php echo $color_output6; ?>">
	<h6><?php echo $split_output6[0]; ?></h6>
	<i class="far fa-lightbulb fa-3x"></i>
	<p>Activated By:
		<?php
			if ($split_output6[1] == "1") {
				echo "Time<br>";
				echo $split_output6[2] . ".00 - " . $split_output6[3] . ".00";
			}
			else if ($split_output6[1] == "2") {
				echo "<br>";
				$input_no = (int) $split_output6[4] + 1;
				echo "Input " . $input_no;
			}
			else {
				echo "<br>-";
			}
		?>
	</p>
</div>

<?php //output 7
	$split_output7 = explode(",", $output7);
	$color_output7 = "w3-dark-grey";
	if ($split_output7[1] == "0") {
		$color_output7 = "w3-dark-grey";
	}
	else {
		if ($io_data[14] == "1") {
			$color_output7 = "w3-green";
		}
		else {
			$color_output7 = "w3-blue-grey";
		}
	}
?>
<div class="io-box w3-padding-16 w3-center <?php echo $color_output7; ?>">
	<h6><?php echo $split_output7[0]; ?></h6>
	<i class="far fa-lightbulb fa-3x"></i>
	<p>Activated By:
		<?php
			if ($split_output7[1] == "1") {
				echo "Time<br>";
				echo $split_output7[2] . ".00 - " . $split_output7[3] . ".00";
			}
			else if ($split_output7[1] == "2") {
				echo "<br>";
				$input_no = (int) $split_output7[4] + 1;
				echo "Input " . $input_no;
			}
			else {
				echo "<br>-";
			}
		?>
	</p>
</div>

<?php //output 8
	$split_output8 = explode(",", $output8);
	$color_output8 = "w3-dark-grey";
	if ($split_output8[1] == "0") {
		$color_output8 = "w3-dark-grey";
	}
	else {
		if ($io_data[15] == "1") {
			$color_output8 = "w3-green";
		}
		else {
			$color_output8 = "w3-blue-grey";
		}
	}
?>
<div class="io-box w3-padding-16 w3-center <?php echo $color_output8; ?>">
	<h6><?php echo $split_output8[0]; ?></h6>
	<i class="far fa-lightbulb fa-3x"></i>
	<p>Activated By:
		<?php
			if ($split_output8[1] == "1") {
				echo "Time<br>";
				echo $split_output8[2] . ".00 - " . $split_output8[3] . ".00";
			}
			else if ($split_output8[1] == "2") {
				echo "<br>";
				$input_no = (int) $split_output8[4] + 1;
				echo "Input " . $input_no;
			}
			else {
				echo "<br>-";
			}
		?>
	</p>
</div>

<div class="w3-clear"></div>

<?php
	mysqli_close($conn);
?>