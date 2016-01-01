<!DOCTYPE html>
<head>
	<title>Thanks for submitting!</title>
</head>
<body>
	Thanks for submitting, <?php echo $_POST["name"]; ?><br />
	<?php 
		$points = 0;
		$diet = $_POST["diet"];
		if ($diet == "superhealth") 
			$points += 3;
		else if ($diet == "health")
			$points += 2;
		else if ($diet == "kindahealth")
			$points += 1;
		$workout = $_POST["workout"];
		if ($workout == "yes")
			$points += 3;
		echo "You have " . $points;
	?>
	</