<?php
// @todo make styling for history page 
require("../../conn.php");
$allpeople = $dbh->query("SELECT * FROM `lidmaatschap`")->fetchall();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // print_r($allpeople);
    /* Looping through the array and printing the values. */
    foreach ($allpeople as $key) {
        // @todo make styling for people
        echo $key['userid'];
        echo $key["voornaam"];
        echo $key["achternaam"];
        echo $key['email'];
        echo $key['telefoon'];
        echo $key['bericht'].PHP_EOL;
    }

    // echo "nog geen nieuw lidschapen";

    ?>
</body>

</html>