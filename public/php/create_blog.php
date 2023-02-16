<?php

require("../../conn.php");
if (isset($_POST["opslaan"])) {
    $kaas = "INSERT INTO `blog` (`titel`,`bericht`)
    VALUES(
        '{$_POST['titel']}',
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
            title<input type="text" name="titel">
            bericht<textarea cols="30" rows="10" name="bericht"></textarea>
            <input type="submit" name="opslaan">
        </form>
    </div>

</body>

</html>