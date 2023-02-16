<?php

require("../../conn.php");
$id_blog = $dbh->query("SELECT * FROM `blog` WHERE blogId = {$_GET["id"]}")->fetch();
$id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>series</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <h2><?= $id_blog["titel"] ?></h2>
        <p><?= $id_blog["bericht"] ?></p>
    </div>
</body>

</html>