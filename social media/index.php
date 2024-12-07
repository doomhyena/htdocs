<?php 

	require "config.php";
	
	session_start();
	
	// Ha nincs bejelentkezett felhasználó, átirányítunk a reg.php oldalra
	if(!isset($_SESSION['id'])){
		
		header("Location: reg.php");
		
	} /* Van bejelentkezett felhasználó*/ else {
		
		// Bejelentkezéskor elmentett azonosítója a felhasználónak
		$id = $_SESSION['id'];
		
		$lekerdezes = "SELECT * FROM users WHERE id=$id";
		$talalt_felhasznalo = $conn->query($lekerdezes);
		$felhasznalo = $talalt_felhasznalo->fetch_assoc();
		
		echo "<h1>Üdv, $felhasznalo[username]!</h1>";
		
		echo "<a href='logout.php'>Kijelentkezés</a>";
		
	}
	
	// Poszt feltöltése
	if(isset($_POST['post-btn'])){
		
		$userid = $_SESSION['id'];
		
		$szoveg = $_POST['szoveg'];
		
		// Feltöltés
		$conn->query("INSERT INTO posztok VALUES(id, '$userid', '$szoveg')");
		
	}
	
	// Poszt törlése
	if(isset($_POST['del-btn'])){
		
		// Linkből elmentjük, hogy melyik posztot kell törölni
		$posztid = $_GET['posztid'];
		
		// Poszt törlése
		$conn->query("DELETE FROM posztok WHERE id=$posztid");
		
	}

?>

<hr>

	<form method="post">
	
		<input type="text" name="szoveg" placeholder="Írj valamit...">
		
		<input type="submit" name="post-btn">
	
	</form>

<hr>

<h3 style="text-align: center">Posztok</h3>

<?php 

	// Összes poszt lekérdezése id alapján csökkenő sorrendben
	$lekerdezes = "SELECT * FROM posztok ORDER BY id DESC";
	$talalt_posztok = $conn->query($lekerdezes);
	while($poszt=$talalt_posztok->fetch_assoc()){
		
		// Lekérdezzük az adott poszt íróját a posztban eltárolt felhasználó azonosító alapján
		$lekerdezes = "SELECT * FROM users WHERE id=$poszt[userid]";
		$talalt_iro = $conn->query($lekerdezes);
		$iro = $talalt_iro->fetch_assoc();
		
		// Poszt kiírása
		echo '<p style="max-width: 200px; padding: 10px; border: 1px solid black; margin: 10px auto;">';
		
		echo "<a href='profil.php?userid=$iro[id]'>".$iro['username']."</a>: "; // --> Poszt userid-ből lekérdezett
		
		echo $poszt['szoveg'];
		
			// Csak azoknál jelenik meg a törlés gomb, amiket a bejelentkezett felhasználó írt
			if($poszt['userid'] == $_SESSION['id']){
		
				// Törlés form
				echo "<form style='max-width: 200px; margin: 10px auto' method='post' action='index.php?posztid=$poszt[id]'>";
				
				echo "<input type='submit' name='del-btn' value='Törlés'>";
				
				echo "</form>";
			
			}
		
		echo "</p>";
		
	}

?>