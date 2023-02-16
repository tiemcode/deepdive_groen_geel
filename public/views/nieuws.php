<?php

require("../../conn.php");

$allnieuws = $dbh->query("SELECT * FROM `blog`")->fetchall();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/style.css">
    <script src="../js/app.js" defer></script>
    <title>Groen Geel</title>
</head>

<body>
    <?php require("nav.html") ?>
    <div class="container-rooster mx-auto px-6 max-w-7xl pt-60">
        <!-- all cards -->
        <div class="grid grid-cols-1 grid-rows-3 md:grid-cols-3 md:grid-rows-1 gap-10">

            <!-- begin loop -->
            <?php foreach ($allnieuws as $row) : ?>
                <!-- card -->
                <div class="card rounded-md shadow-md bg-white h-fit">
                    <img src="../img/team.png" alt="" width="100%" height="100%" class="rounded-t-md object-cover">
                    <div class="px-3 py-5 flex justify-between">
                        <h1 class="font-bold"><a href="show_blogs.php?id=<?= $row["blogId"] ?>"><?= $row["titel"]?></a></h1>
                        <p class="text-right"><?= $row['gemaakt_op'] ?></p>
                    </div>
                </div>
                <!-- end loop -->
            <?php endforeach ?>
        </div>
    </div>
    </div>
    <?php require("footer.html") ?>

</body>

</html>