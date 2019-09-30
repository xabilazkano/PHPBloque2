
	<html>
<head>
	<title>Prueba de PHP</title>
</head>
<body>
	<?php
	function azalera ($aldea){
		try {
			if($aldea < 0)
				throw new Exception ("Aldeak ezin du negatiboa izan");
			else
				return "Azalera ". pow($aldea, 2)." da.<br>";
		} catch (Error $e) {
			echo $e->getMessage(), "\n";
		}
	}

	$arraia = array();
	for($i=0;$i<5;$i++){
		$arraia[$i]=random_int(1, 20);
	}
	$arraia[4]=random_int(-10,-1);

	for($i=0;$i<count($arraia);$i++){
		echo azalera($arraia[$i]);
	}

?>
</body>
</html>