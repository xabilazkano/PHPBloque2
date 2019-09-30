<html>
<head>
	<title>Prueba de PHP</title>
</head>
<body>

	<?php
	 
	function potentzia($oinarria,$pot=2){
		return pow($oinarria,$pot);
	}
	
	echo potentzia(2,3)."<br>";
	echo potentzia(2);


	?>
</body>
</html>