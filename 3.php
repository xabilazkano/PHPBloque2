<html>
	<head>
		<title>Prueba de PHP</title>
	</head>
	<body>
		<?php
		$arraia = array ( );
		for ($i = 0; $i <= 19; $i++) {
			$arraia[$i] = rand (0 , 100);
		}
		sort($arraia);
		echo "<h1 style='color:blue'>".$arraia[0]."</h1>";
		echo "<h1 style='color:green'>".$arraia[count($arraia)-1]."</h1>";
		echo "<h1 style='color:red'> Suma: ".array_sum($arraia)." Media: ".array_sum($arraia)/count($arraia)."</h1>";
		?>
	</body>
</html>