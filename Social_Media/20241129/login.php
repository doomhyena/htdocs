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
	   <meta name='description' content='Social Media'>
	   <meta name='keywords' content='a, b, c, d'>
	   <meta name='author' content='Csontos Kincső'>
	   <meta http-equiv="refresh" content="60"> <!-- 2 másodpercenként frissíti -->
	   <meta name='viewport' content='width=device-width, initial-scale=1.0'>
	   <link rel='icon' href='pics/favicon.ico' type='image/x-icon'> 
	   <link rel='stylesheet' type='text/css' href='css/style.css'>
   </head>
   <body>
	
<h1>Bejelentkezés</h1>
<br>
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