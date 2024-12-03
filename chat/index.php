<?php
    require('cfg.php');

    session_start();

    if (!isset($_SESSION['felhasznalo'])) {
        header("Location: login.php");
        exit;
    }
    echo "<h1>Üdv, " . htmlspecialchars($_SESSION['felhasznalo']) . "!</h1>";

    if (isset($_POST['post_btn'])) {
        $username = $conn->real_escape_string($_SESSION['felhasznalo']);
        $text = $conn->real_escape_string($_POST['text']);
        $conn->query("INSERT INTO uzenetek (username, uzenetek) VALUES ('$username', '$text')");
        
        $lekerdezes = "SELECT * FROM uzenetek";
        $talalt_sorok = $conn->query($lekerdezes);
        $uzenetek = array();
        while ($sor = $talalt_sorok->fetch_assoc()) {
            $uzenetek[] = $sor;
        }
        echo json_encode($uzenetek);
        exit;
    }
?>

<hr>

<form method="POST">
    <input type="text" id="text" name="text" placeholder="Írj ide valamit...">
    <input type="submit" id="post-btn" name="post_btn" value="Posztolás">
</form>

<hr>
<div id="uzenetek">
    <?php
        $lekerdezes = "SELECT * FROM uzenetek";
        $talalt_sorok = $conn->query($lekerdezes);
        while ($sor = $talalt_sorok->fetch_assoc()) {
            echo "<p>" . htmlspecialchars($sor['username']) . ": " . htmlspecialchars($sor['uzenetek']) . "</p>";
        }
    ?>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#post-btn').click(function(e) {
            e.preventDefault();
            var text = $('#text').val();
            $.ajax({
                type: 'POST',
                url: 'index.php',
                data: { post_btn: true, text: text },
                dataType: 'json',
                success: function(data) {
                    $('#uzenetek').empty();
                    $.each(data, function(index, value) {
                        $('#uzenetek').append('<p>' + value.username + ': ' + value.uzenetek + '</p>');
                    });
                    $('#text').val('');
                }
            });
        });
    });
</script>
