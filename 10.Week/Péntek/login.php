<?php 

	session_start();

	if(isset($_POST['login-btn'])){
		
		$vane = false;

		for ($i = 0; $i < count($_SESSION('felhasznalok')); $i++) {

			if($_SESSION['felhasznalok'][$i]['felhasznalonev'] == $_POST['username']){

				$vane = true;

				for($i=0;$i<count($_SESSION['felhasznalok']);$i++){
			
					if($_SESSION['felhasznalok'][$i]['felhasznalonev'] == $_POST['username']){
						
						if($_SESSION['felhasznalok'][$i]['jelszo'] == $_POST['password']){
							
							$_SESSION['felhasznalo'] = $_POST['username'];
							
							header("Location: index.php");
							
						}
						
					}
					
				}
			} else {
				echo "Nem található felhasználó!";
			}
		}		
	}

?>

<h1>Bejelentkezés</h1>

<form method="post">

	<input type="text" name="username" placeholder="Felhasználónév">
	
	<br><br>
	
	<input type="text" name="password" placeholder="Jelszó">

	<br><br>

	<input type="submit" name="login-btn" value="Bejelentkezés">

</form>