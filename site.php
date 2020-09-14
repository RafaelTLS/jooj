<!DOCTYPE html>
<html>
<head>
	<title>Título</title>
</head>
<body>
	<form method="post">
		<input type="number" name="num1">
		<input type="number" name="num2">
		<input type="submit">
	</form>		
	<br>
	<?php
		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];
		$finalnum = $num1+$num2;
		function higher($finalnum) {
			if ($finalnum >= 10) {
				echo "yes";
			} else {
				echo "no";
			}
		}

		echo $finalnum;
		echo higher($finalnum);
	?>
</body>
</html>	