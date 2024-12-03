<?php 

	require "config.php";
	
	session_start();
	
	if(isset($_POST['login-btn'])){
		
		$username = $_POST['username'];
		
		$password = $_POST['password'];
		
		$lekerdezes = "SELECT * FROM users WHERE username='$username'";
		$talalt_felhasznalo = $conn->query($lekerdezes);
		
		if(mysqli_num_rows($talalt_felhasznalo) > 0){
			
			$felhasznalo = $talalt_felhasznalo->fetch_assoc();
			
			if($felhasznalo['password'] == $password){
				
				$_SESSION['id'] = $felhasznalo['id'];
				
				header("Location: index.php");
				
			}
			else{
				echo "Hibás jelszó!";
			}
			
		}
		else{
			
			echo "Nincs ilyen felhasználó!";
			
		}
		
	}

?>
<!DOCTYPE html>
<html>
   <head>
	   <title>Bejelentkezés</title>
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
	
<h1>Bejelentkezés</h1>
	<form method="post">
		<input type="text" name="username" placeholder="Felhasználónév">
		<input type="password" name="password" placeholder="Jelszó">
		<input type="submit" name="login-btn" value="Bejelentkezés!">
	</form>
	<a href="reg.php">Regisztráció</a>
	<footer>
		<p id='FooterP'>&copy; 2024 Csontos Kincső. Minden Jog fenntartva.</p>
	</footer>
   </body>
</html>