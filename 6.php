<html>
	<head>
		<title>Prueba de PHP</title>
	</head>
	<body>
		<?php
		
		$urtebetetzeak = array(
			
			"Urtarrila" => ["Mikel","Ainara","Xabi"],
			"Otsaila" => ["Irati","Ibai"],
			"Martxoa" => ["Haizea"],
			"Apirila" => ["Aitor","Eneko"],
			"Maiatza" => ["Naiara"],
			"Ekaina" => ["Maialen","Enara","Elene"],
			"Uztaila" => ["Urtzi","Unai"],
			"Abuztua" => ["Julen"],
			"Iraila" => ["Naroa","Nerea"],
			"Urria" => ["Ander","Ekain"],
			"Azaroa" => ["Endika"],
			"Abendua" => ["Udane","Amaiur"]
		);
		function berria ($array, $hilabetea, $izena){
			array_push($array[$hilabetea], $izena);
			
			
			return count($array[$hilabetea]);
		}
		$proba = berria($urtebetetzeak,"Urtarrila","Peru");
		echo $proba;
		foreach ($urtebetetzeak as $hilabetea => $izenak) {
			echo "<h2 style='color:blue'>".$hilabetea."</h2><ol>";
				foreach ($izenak as $izena) {
					echo "<li>".$izena."</li>";
				}
			echo "</ol>";
			}
		?>
	</body>
</html>