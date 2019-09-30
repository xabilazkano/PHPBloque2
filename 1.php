<html>
	<head>
		<title>Prueba de PHP</title>
	</head>
	<body>
		<?php
		
		$arraia = array();
		$faktoriala = array();
		$faktorea= 1;
		$faktoriala[0]=0;
		for($i=0;$i<11;$i++){
			$arraia[$i]=$i;
			echo $arraia[$i];
			if($i>0){
				$faktorea=$faktorea*$i;
				$faktoriala[$i]=$faktorea;
				
			}
			echo "&nbsp; ".$faktoriala[$i]."<br>";
		}
		
		?>
	</body>
</html>