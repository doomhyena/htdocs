<?php 

	require "config.php";
	
	$userid = $_GET['userid'];
	
	// Adott profil lekérdezése
	$lekerdezes = "SELECT * FROM users WHERE id=$userid";
	$talalt_felhasznalo = $conn->query($lekerdezes);
	$felhasznalo = $talalt_felhasznalo->fetch_assoc();
	
	echo '<a href="index.php">Főoldal</a>';
	
	echo "<h1>$felhasznalo[username] profilja</h1>";

?>

<hr>

<h3 style="text-align: center">Posztok</h3>

<?php 

	// Csak az adott felhasználó posztjainak kiírása
	$lekerdezes = "SELECT * FROM posztok WHERE userid=$userid ORDER BY id DESC";
	$talalt_posztok = $conn->query($lekerdezes);
	while($poszt=$talalt_posztok->fetch_assoc()){
		
		// Poszt kiírása
		echo '<p style="max-width: 200px; padding: 10px; border: 1px solid black; margin: 10px auto;">';
		
		echo $poszt['szoveg'];
		
		echo "</p>";
		
	}
	

?>