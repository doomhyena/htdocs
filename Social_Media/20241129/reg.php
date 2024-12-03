<?php 

	require "config.php";
	
	// REG 
	if(isset($_POST['reg-btn'])){
		
		$username = $_POST['username'];
		
		$password = $_POST['password'];

		// Lekérdezzük, hogy van-e már az adott felhasználó
		$lekerdezes = "SELECT * FROM users WHERE username = '$username'";
		$talalt_felhasznalo = $conn->query($lekerdezes);
		
		if(mysqli_num_rows($talalt_felhasznalo) === 0){
			// Új felhasználó feltöltése
			$conn->query("INSERT INTO users VALUES(id, '$username', '$password')");
		
			header("Location: login.php");
		} else {
			echo "Az adott felhasználó jelenleg regisztrált!";

		}		
	}

?>

<!DOCTYPE html>
<html>
   <head>
	   <title>Regisztráció</title>
	   <meta charset='UTF-8'>
	   <meta name='description' content='Social Media'>
	   <meta name='keywords' content='a, b, c, d'>
	   <meta name='author' content='Csontos Kincső'>
	   <meta http-equiv="refresh" content="60"> <!-- 2 másodpercenként frissíti -->
	   <meta name='viewport' content='width=device-width, initial-scale=1.0'>
	   <link rel='icon' href='pics/favicon.ico' type='image/x-icon'> 
	   <link rel='stylesheet' type='text/css' href='css/style.css'>
   </head>
   <body>
   <h1>Regisztráció</h1>
	<form method="post">
		<input type="text" name="username" placeholder="Felhasználónév">
		<input type="password" name="password" placeholder="Jelszó">
		<input type="submit" name="reg-btn" value="Regisztráció!">
	</form>
	<a href="login.php">Bejelentkezés</a>
	<footer>
		<p id='FooterP'>&copy; 2024 Csontos Kincső. Minden Jog fenntartva.</p>
	</footer>
   </body>
</html>