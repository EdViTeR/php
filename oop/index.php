<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
</head>
<body>
	<?php 
		$a = 25;
		for ($a=25; $a < 200; $a++) { 
			echo "<a href='oop_$a.php'>ООП $a</a><p>";
		}
	?>
</body>
</html>