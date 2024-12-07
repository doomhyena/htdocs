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
		
		echo "<a href='logout.php'>Kijelentkezés</a>";
		
	}
	
	if(isset($_POST['post-btn'])){
		
		$userid = $_SESSION['id'];
		$szoveg = $_POST['szoveg'];
		$conn->query("INSERT INTO posztok VALUES(id, '$userid', '$szoveg')");
		
	}
	
	if(isset($_POST['del-btn'])){
		
		$posztid = $_GET['posztid'];
		$conn->query("DELETE FROM posztok WHERE id=$posztid");
		
	}

	if (isset($_POST['comment-btn'])) {
		$userid = $_SESSION['id'];
		$postid = $_GET['posztid'];
		$content = $_POST['comment-content'];
	
		$conn->query("INSERT INTO comments (userid, postid, content) VALUES ($userid, $postid, '$content')");
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
    $lekerdezes = "SELECT * FROM posztok ORDER BY id DESC";
    $talalt_posztok = $conn->query($lekerdezes);
    while ($poszt = $talalt_posztok->fetch_assoc()) {
        $lekerdezes = "SELECT * FROM users WHERE id={$poszt['userid']}";
        $talalt_iro = $conn->query($lekerdezes);
        $iro = $talalt_iro->fetch_assoc();

        echo '<p style="max-width: 200px; padding: 10px; border: 1px solid black; margin: 10px auto;">';
        echo "<a href='profil.php?userid={$iro['id']}'>{$iro['username']}</a>: ";
        echo $poszt['szoveg'];

        if ($poszt['userid'] == $_SESSION['id']) {
            echo "<form style='max-width: 200px; margin: 10px auto' method='post' action='index.php?posztid={$poszt['id']}'>";
            echo "<input type='submit' name='del-btn' value='Törlés'>";
            echo "</form>";
        }
        echo "</p>";

        $lekerdezes = "SELECT comments.*, users.username FROM comments
                       JOIN users ON comments.userid = users.id
                       WHERE postid={$poszt['id']}";
        $talalt_kommentek = $conn->query($lekerdezes);

        if ($talalt_kommentek && $talalt_kommentek->num_rows > 0) {
            echo "<div style='max-width: 200px; margin: 10px auto' method='post'>";
            while ($komment = $talalt_kommentek->fetch_assoc()) {
                echo "<p><strong>{$komment['username']}</strong>: {$komment['content']}</p>";
            }
            echo "</div>";
        } else {
            echo "<p style='max-width: 200px; margin: 10px auto' method='post'>Nincsenek hozzászólások ehhez a poszthoz.</p>";
        }

        echo "<form style='max-width: 200px; margin: 10px auto' method='post' action='index.php?posztid={$poszt['id']}'>";
        echo "<textarea name='comment-content' placeholder='Írd meg a véleményed...'></textarea><br>";
        echo "<input type='submit' name='comment-btn' value='Hozzászólás'>";
        echo "</form>";
    }
?>

<form method="post" action="index.php?posztid=<?php echo $poszt['id']; ?>">
    <textarea name="comment-content" placeholder="Írd meg a véleményed..."></textarea>
    <br>
    <input type="submit" name="comment-btn" value="Hozzászólás">
</form>