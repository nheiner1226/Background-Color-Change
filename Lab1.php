<!DOCTYPE html>
<html lang="EN">
	
<?php

	$bgcolors = array("Aquamarine", "CadetBlue", "Coral", "DarkSalmon", "ForestGreen", "LavenderBlush", "MistyRose");

	$day = date('l');

	if ($day == "Monday")
		{
			$count = 1;
		}

	else if ($day == "Tuesday")
		{
			$count = 2;
		}

	else if ($day == "Wednesday")
		{
			$count = 3;
		}

	else if ($day == "Thursday")
		{
			$count = 4;
		}

	else if ($day == "Friday")
		{
			$count = 5;
		}

	else if ($day == "Saturday")
		{
			$count = 6;
		}

	else if ($day == "Sunday")
		{
			$count = 7;
		}		

?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Background Colors change based on the day of the week</title>

	<style type = "text/css">

		body {
			background-color: <?php echo $bgcolors[$count]; ?>
		}

	</style>

</head>

<body>
	<h1>This is the header.</h1>

</body>
</html>
