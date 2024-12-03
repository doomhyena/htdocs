<?php 

	session_start();

	require "config.php";
	
	$userid = $_GET['userid'];
	
	$lekerdezes = "SELECT * FROM users WHERE id=$userid";
	$talalt_felhasznalo = $conn->query($lekerdezes);
	$felhasznalo = $talalt_felhasznalo->fetch_assoc();
	
	echo '<a href="index.php">Főoldal</a>';
	echo '<a href="index.php">Értesítések</a>';
	
	echo "<h1>$felhasznalo[username] profilja</h1>";
	
	$lekerdezes = "SELECT * FROM kovetok WHERE kovetett = $userid";
	$talalt_kovetok = $conn->query($lekerdezes);
	
	$kovetok = mysqli_num_rows($talalt_kovetok);
	
	echo $kovetok." követő";
	
	echo "<br>";
	
	$lekerdezes = "SELECT * FROM kovetok WHERE koveto = $userid";
	$talalt_kovetok = $conn->query($lekerdezes);
	
	$kovetok = mysqli_num_rows($talalt_kovetok);
	
	echo $kovetok." követés";

	// KÖVETÉS MEGOLDÁSA

	// form
	if($userid != $_SESSION['id']){
		$koveto = $_SESSION['id'];
		$kovetett = $userid;
	
		// Ellenőrzés, hogy követi-e már
		$lekerdezes = "SELECT * FROM kovetok WHERE koveto = $koveto AND kovetett = $kovetett";
		$talalat = $conn->query($lekerdezes);
	
		echo "<form method='post'>";
		if ($talalat && mysqli_num_rows($talalat) > 0) {
			echo "<input type='submit' name='unfollow-btn' value='Követés leállítása'>";
		} else {
			echo "<input type='submit' name='follow-btn' value='Követés'>";
		}
		echo "</form>";
	
		// Követés / Unfollow kezelése
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			if (isset($_POST['follow-btn'])) {
				$lekerdezes = "INSERT INTO kovetok (koveto, kovetett) VALUES ($koveto, $kovetett)";
				$conn->query($lekerdezes);
				header("Location: profile.php?userid=$userid");

				// új értesítések

				$conn->query("INSERT INTO ertesitesek (userid, type) VALUES ($userid, 'follow')");
			}
	
			if (isset($_POST['unfollow-btn'])) {
				$lekerdezes = "DELETE FROM kovetok WHERE koveto = $koveto AND kovetett = $kovetett";
				$conn->query($lekerdezes);
				header("Location: profile.php?userid=$userid");
				exit;
			}
		}
		echo "</form>";	
	}
?>

<hr>

<h3 style="text-align: center">Posztok</h3>

<?php 

	$lekerdezes = "SELECT * FROM posztok WHERE userid=$userid ORDER BY id DESC";
	$talalt_posztok = $conn->query($lekerdezes);
	while($poszt=$talalt_posztok->fetch_assoc()){
		
		echo '<p style="max-width: 200px; padding: 10px; border: 1px solid black; margin: 10px auto;">';
		
		echo $poszt['szoveg'];
		
		echo "</p>";
		

	$lekerdezes = "SELECT * FROM likes WHERE postid=$poszt[id]";
	$talalt_sorok = $conn->query($lekerdezes);
		
	$likeok_szama = mysqli_num_rows($talalt_sorok);
	echo "$likeok_szama like";
	
	}
?>