<?php 

	session_start();
	
	// Felhasználók tárolása
	if(!isset($_SESSION['felhasznalok'])){
		
		$_SESSION['felhasznalok'] = array();
		
	}
	
	// Van-e bejelentkezett felhasználó
	if(!isset($_SESSION['felhasznalo'])){
		
		header("Location: reg.php");
		
	}

	echo "<h1>Üdv, $_SESSION[felhasznalo]!</h1>";

?>