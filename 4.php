<html>
<head>
	<title>Prueba de PHP</title>
</head>
<body>
	<?php
	$esaldia = "manzana pera limón sandía melón";
	$hitzak = array();
	$hitza = explode(' ', $esaldia);
	for ($i = 0; $i < count($hitza); $i++)
		
		$hitzak[$hitza[$i]] = strlen($hitza[$i]);
	print_r($hitzak);
	?>
</body>
</html>