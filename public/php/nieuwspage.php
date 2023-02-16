<?php

require("../../conn.php");

$allnieuws = $dbh->query("SELECT * FROM `blog`")->fetch();

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
    if ($all_series->rowCount() > 0) {
        foreach ($allnieuws as $row) {
            // <!-- insert card here  @todo insert card for news  -->

            echo $row['titel'];


            // <!-- end insert -->
        }
    }
    ?>
</body>

</html>