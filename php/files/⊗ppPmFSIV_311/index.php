<?php

function getFile($name) {
	ob_start();
		include $name; 
	return ob_get_clean(); 
}

$res = getFile('arr.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>title</title>
	</head>
	<body>
		<?php echo $res; ?>
		<main>
			content
		</main>
		<?php echo $res; ?>
	</body>
</html>