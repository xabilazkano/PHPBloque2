<html>
	<head>
		<title>Prueba de PHP</title>
		
	</head>
	<body>
		<?php
		class pertsona {
		
			private $izena = '';
			private $abizena = '';
			private $dni = '';
			public function __construct($izena, $abizena, $dni) {
				$this->izena = $izena;
				$this->abizena = $abizena;
				$this->dni = $dni;
			}
			
			public function getizena() {
				echo $this->izena;
			}
			public function setizena($izena) {
				$this->izena = $izena;
			}
			public function getabizena() {
				echo $this->abizena;
			}
			public function setabizena($abizena) {
				$this->abizena = $abizena;
			}
			public function getDni() {
				echo $this->dni;
			}
			public function setDni($dni) {
				$this->dni = $dni;
			}
			public function datuakErakutsi() {
				echo "Pertsona: ".$this->izena." ".$this->abizena;
			}
		}
		
		class Erabiltzailea extends pertsona {
			private $puntuak = 0;
			public function getpuntuak() {
				echo $this->puntuak;
			}
			public function setpuntuak($puntuak) {
				$this->puntuak = $puntuak;
			}
			public function datuakErakutsi(){
				echo "Pertsona: ".$this->izena." ".$this->abizena." Puntuak: ".$this->puntuak;
			}
		
			public function puntuakKonprobatu() {
				if ($this->puntuak < 100)
					echo "Kontuz, 100 puntu baino gutxiago dituzu";
			}
		}
		?>
	</body>
</html>