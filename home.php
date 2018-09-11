<!DOCTYPE html>
<html>
<head>
	<title>HomeSpeak</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="fontawesome/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="w3.css">
	<style type="text/css">
		table {
			border-spacing: 10px;
		}
		td {
			border: 1px solid black;
			width: 140px;
			height: 150px;
			padding: 10px;
			background: #ccddee;
			text-align: center;
		}
		body {
			margin: 0;
			padding: 8px;
			background: black;
			color: white;
		}
		.io-box {
			margin: 4px;
			width: 150px;
			float: left;
		}
		.io-box p {
			font-size: 10px;
		}
	</style>

	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
		function refreshMonitor() {
			$.ajax({
				url: "<?php echo "refresh_monitor.php?id=HS0001"; ?>",
				success: (function (result) {
					$("#monitor-panel").html(result);
				})
			})
		}

		refreshMonitor();
		setInterval(refreshMonitor, 1000);
	</script>
</head>
<body>
	
	<h1 class="w3-center">HomeSpeak | HS0001</h1>

	<div id="monitor-panel">
		
	</div>

</body>
</html>