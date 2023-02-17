<?php

require("../../conn.php");
$id_blog = $dbh->query("SELECT * FROM `blog` WHERE blogId = {$_GET["id"]}")->fetch();
$id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/style.css">
    <title>Document</title>
</head>
<?php include("nav.html") ?>
<div class="flex justify-center items-center">
    <div class="overflow-hidden rounded-lg bg-white shadow pt-32">
        <div class="px-4 py-5 sm:p-6 ">
            <div class="flex flex-col">
                <h2 class="bg-primary rounded-sm p-2 text-white"><a href="nieuws.php">ga terug</a></h2>
                <h1 class="font-semibold text-xl"><?= $id_blog["titel"] ?></h1>
                <p>
                    <?= $id_blog['bericht'] ?>
                </p>
            </div>
        </div>
    </div>
</div>
<?php include("footer.html") ?>
</body>

</html>