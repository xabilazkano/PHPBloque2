<html>
	<head>
		<title>Prueba de PHP</title>
	</head>
	<body>
		<?php
		
			$urtea= 2020;
			$egutegia=  array(
				"Urtarrila" => cal_days_in_month(CAL_GREGORIAN,1,$urtea),
				"Otsaila" => cal_days_in_month(CAL_GREGORIAN,2,$urtea),
				"Martxoa" => cal_days_in_month(CAL_GREGORIAN,3,$urtea),
				"Apirila" => cal_days_in_month(CAL_GREGORIAN,4,$urtea),
				"Maiatza" => cal_days_in_month(CAL_GREGORIAN,5,$urtea),
				"Ekaina" => cal_days_in_month(CAL_GREGORIAN,6,$urtea),
				"Uztaila" => cal_days_in_month(CAL_GREGORIAN,7,$urtea),
				"Abuztua" => cal_days_in_month(CAL_GREGORIAN,8,$urtea),
				"Iraila" => cal_days_in_month(CAL_GREGORIAN,9,$urtea),
				"Urria" => cal_days_in_month(CAL_GREGORIAN,10,$urtea),
				"Azaroa" => cal_days_in_month(CAL_GREGORIAN,11,$urtea),
				"Abendua" => cal_days_in_month(CAL_GREGORIAN,12,$urtea)
			);
			print_r($egutegia);
		?>
	</body>
</html>