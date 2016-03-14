<?php 

switch ($page) {
	case 'stranka':
		include_once 'pages/koalicije-unutrasnja.php';
		break;
	
	case 'stranke':
		include_once 'pages/koalicije-stranke.php';
		break;
	
	case 'o-nama':
		include_once 'pages/o-nama.php';
		break;
	
	default:
			
		
		include_once 'pages/pocetna.php';
		break;
}


?>