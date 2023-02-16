<?php

require("../../conn.php");
if (isset($_POST["opslaan"])) {
    $kaas = "INSERT INTO `lidmaatschap` (`voornaam`,`achternaam`,`email`,`telefoon`,`bericht`)
    VALUES(       
        '{$_POST['voornaam']}',
        '{$_POST['achternaam']}',
        '{$_POST['email']}',
        '{$_POST['nummer']}',
        '{$_POST['bericht']}')";
    $add_update = $dbh->query($kaas);
    // header("Location: index.php");
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="header">
        <h4><a href="../views/index.php">ga terug</a></h4>
    </div>
    <div id="contaner">
        <form id="formbrr" method="POST">
            voornaam<input type="text" name="voornaam">
            achternaam<input type="text" name="achternaam">
            email<input type="text" name="email">
            telefoon nummer<input type="tel" name="nummer">
            bericht<textarea cols="30" rows="10" name="bericht"></textarea>
            <input type="submit" name="opslaan"></input>
        </form>
    </div>

</body>

</html>