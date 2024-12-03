<?php

    require('cfg.php');
/*


    $szoveg = "Szöveg";

    $conn->query("INSERT INTO szovegek VALUES(id, '$szoveg')");


*/
    if (isset($_POST['submit'])) {
        $szoveg = $_POST['szoveg'];

        $conn->query("INSERT INTO szovegek VALUES(id, '$szoveg')");

    }

?>

<form method="post">
    <input type="text" name="szoveg" placeholder="Írj ide valamit...">
    <input type="submit" name="submit" value="Küldés">
</form>

<hr>

<?php

    echo "Egy sor lekérdezése: <br>";
    $lekerdezes = "SELECT * FROM szovegek WHERE id = 1";
    $talalt_sor = $conn->query($lekerdezes);
    $sor = $talalt_sor->fetch_assoc();

    echo "id: " . $sor['id']." szöveg: ".$sor['text']."<br>";

    echo "<br>";
    echo "hr";

    $lekerdezes = "SELECT * FROM szovegek";
    $talalt_sorok = $conn->query($lekerdezes);
    while ($sor = $talal_sorok->fetch_assoc()) {
        echo "szöveg: ".$sor['text']."<br>";
    }

?>