<?

    /*
    
        Feladat:

            nevek = András, Béla, Csongor, Dénes, Emese, Ferenc, Géza

            Session tömbben mentsd el a neveket
            Generáltass egy linket minden névhez. A linkben csatold, hogy
            hányadik indexen áll az adott nlv

            A link a szemely.php oldalt nyissa meg. 
            Írd ki azt a nevet, amelyiknek az indexét átadtad a linkben, majd generáltass neki egy random születési dátumot:
            Év: 1998 és 2000 között
            Hónap: 1 és 12 között
            Nap: 1 és 28 között

    */

    $nevek = ["András", "Béla", "Csongor", "Dénes", "Emese", "Ferenc", "Géza"];
    $_SESSION['nevek'] = $nevek;

    for ($index = 0; $index < count($nevek); $index++) {
        $nev = $nevek[$index];
        echo '<a href="szemely.php?index=' . $index . '">' . $nev . '</a><br>';
    }

?>