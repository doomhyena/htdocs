<?

    /*
    
        Feladat:
            Oldalak:
                - index
                - letrehoz
                - diak

            Hozz létrre sessionben egy napló nenvű tömböt a megfelelő módon a indexen-

        $nevek = array('András', 'Béla', 'Csongor', 'Dénes', 'Emese', 'Ferenc', 'Gréta');

        A letrehozas odal menjen végog a mevel a tömbön. Minden lefutásakor adjon hozzá egy új tömbt
        a $naplo tömbhöz úgy, hogy elhelyezi az adott nevet az új tömbben, és generál 10 random számot
        1 és 5 között, amiket szintén elhelyez az új tömbben.

        Az indexen nezutánn generáltass anyi linket, ahány tömb van a $napló tömbben.

        Minden link a diak.php oldalra navigáljon át, és linken belül adja át az éppen vizsgált tömb indexét (melyik indexen van a $naplo tombben)
        A linkre írd ki, hogy melyik név szerepel az adott tömbben. A diák.php oldal keresse meg az adott tömböt index alapján a $naplo tömbben, és írja ki a tartalmát

    
    */
    session_start();

    if (!isset($_SESSION['napló'])) {
        print_r($_SESSION['napló']);
    } else {
        $_SESSION['napló'] = array();
    }
    
?>

<a href="letrehozas.php">Létrehozás</a>