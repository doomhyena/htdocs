<?php 

	require "config.php";
	
	session_start();
	
	if(!isset($_SESSION['id'])){
		
		header("Location: reg.php");
		
	} else {
		
		$id = $_SESSION['id'];
		
		$lekerdezes = "SELECT * FROM users WHERE id=$id";
		$talalt_felhasznalo = $conn->query($lekerdezes);
		$felhasznalo = $talalt_felhasznalo->fetch_assoc();
		
		echo "<h1>Üdv, $felhasznalo[username]!</h1>";
		echo "<a href='profil.php?userid=$id'>Profilom</a>";
		echo "<a href='logout.php'>Kijelentkezés</a>";
		
	}

	if(isset($_POST['post-btn'])){

		$userid = $_SESSION['id'];
		$szoveg = $_POST['szoveg'];

		$conn->query("INSERT INTO posztok VALUES(id, '$userid', '$szoveg')");

	}
	if(isset($_POST['delete'])){

		$posztid = $_GET['posztid'];

		$conn->query("DELETE FROM posztok WHERE id=$posztid");

		header("Location: index.php");

	}

	// like frissítése
	if(isset($_POST['like-btn'])){
		$conn->query("INSERT INTO likes VALUES(id, $id, $posztid)");
	}

?>

<!DOCTYPE html>
<html>
   <head>
	   <title>Social Media</title>
	   <meta charset='UTF-8'>
	   <meta name='description' content='Social Media'>
	   <meta name='keywords' content='a, b, c, d'>
	   <meta name='author' content='Csontos Kincső'>
	   <meta http-equiv="refresh" content="60"> <!-- 60 másodpercenként frissíti -->
	   <meta name='viewport' content='width=device-width, initial-scale=1.0'>
	   <link rel='icon' href='pics/favicon.ico' type='image/x-icon'> 
	   <link rel='stylesheet' type='text/css' href='css/style.css'>
   </head>
   <body>
	<hr>
	<form method="post">
		<input type="text" name="szoveg" placeholder="Írj ide valamt">
		<input type="submit" name="post-btn" value="Küldés">
	</form>
	<hr>
	<h3>Posztok:</h3>
	<?php

		$lekerdezes = "SELECT * FROM posztok ORDER BY id DESC";
		$talalt_posztok = $conn->query($lekerdezes);

		while($poszt = $talalt_posztok->fetch_assoc()){
			
			$lekerdezes = "SELECT * FROM users WHERE id = $poszt[userid]";
			$talalt_iro = $conn->query($lekerdezes);
			$iro = $talalt_iro->fetch_assoc();
		
			// interakció form
				
			echo "<form method='post' action='index.php?posztid=$poszt[id]'>";

			echo "<p><a href='profil.php?userid=$poszt[userid]'>$iro[username]: </a><a>$poszt[szoveg]</a></p>";

			echo "<br><br>";

			// Lekérdezzük, hogy hánny like van az adott poszton
			$lekerdezes = "SELECT * FROM likes WHERE posztid = $poszt[id]";
			$talalt_likes = $conn->query($lekerdezes);

			$likeok_száma = $talalt_likes->num_rows;

			echo "<p>Likeok: $likeok_száma</p>";
			echo "<input type='submit' name='like-btn' value='Tetszik'>";
			if ($poszt['userid'] == $_SESSION['id']){
				echo "
					<input type='submit' name='delete' value='Törlés'>
			";
			}
			echo "</form>";
		}
	?>
	<footer>
        <p id='FooterP'>&copy; 2024 Csontos Kincső. Minden Jog fenntartva.</p>
    </footer>
   </body>
</html>