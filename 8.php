<html>
	<head>
		<title>Prueba de PHP</title>
	</head>
	<body>
		<?php
		function exist ($file){
				try {
				if (!file_exists($file))
					throw new exception("Fitxategia ez da aurkitu");
							
			} catch (Error $e) {
				echo $e->getMessage(), "\n";
			}
		}
		exist("config.php");
		?>
	</body>
</html>