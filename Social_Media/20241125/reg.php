<?php 

	require "config.php";
	
	// REG 
	if(isset($_POST['reg-btn'])){
		
		$username = $_POST['username'];
		
		$password = $_POST['password'];
		
		// Új felhasználó feltöltése
		$conn->query("INSERT INTO users VALUES(id, '$username', '$password')");
		
		header("Location: login.php");
		
	}

?>

<!DOCTYPE html>
<html>
   <head>
	   <title>Regisztráció</title>
	   <meta charset='UTF-8'>
	   <meta name='description' content='Rövid leírás az oldal tartalmáról'>
	   <meta name='keywords' content='Keresést, Segítő, Szavak, Vesszővel, Elválasztva'>
	   <meta name='author' content='Neved'>
	   <meta name='viewport' content='width=device-width, initial-scale=1.0'>
	   <link rel='icon' href='pics/favicon.ico' type='image/x-icon'>
	   <link rel='stylesheet' href='http://huncoder.hu/files/huncoder-styles-1-0.css'
	   <link rel='stylesheet' href='http://huncoder.hu/files/huncoder-scripts-1-0.js'> 
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