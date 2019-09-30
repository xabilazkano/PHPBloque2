<html>
	<head>
		<title>Prueba de PHP</title>
	</head>
	<body>
		<?php
		
		
			$columnas=3;
			$filas=4;
			echo "<table border=1";
				for($i=0;$i<$columnas;$i++){
					echo "<tr>";
						for($e=0;$e<$filas;$e++){
							echo "<td>Proba</td>";
						}
					echo "</tr>";
				}
			echo "</table>";
		
		?>
	</body>
</html>