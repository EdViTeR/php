<?php
echo "<pre>" . print_r($_POST, 1) . "</pre>";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="POST">
	<input name="mark[toch][phis][]" value=5>
	<input name="mark[toch][phis][]" value=5>
	<input name="mark[gum][rus][]" value=5>
	<input type="submit" name="submit">
</form>
</body>
</html>