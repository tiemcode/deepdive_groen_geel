<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/style.css">
    <script src="../js/app.js" defer></script>
    <title>Document</title>
</head>

<body>
    <?php require("nav.html") ?>
    <div class="container-rooster mx-auto px-6 max-w-7xl pt-60">
        <!-- all cards -->
        <div class="grid grid-cols-1 grid-rows-3 md:grid-cols-3 md:grid-rows-1 gap-10">

            <!-- begin loop -->
            <?php for ($i = 0; $i < 5; $i++) : ?>
                <!-- card -->
                <div class="card rounded-md shadow-md bg-white h-fit">
                    <img src="../img/team.png" alt="" width="100%" height="100%" class="rounded-t-md object-cover">
                    <div class="px-3 py-5 flex justify-between">
                        <h1 class="font-bold">Titel nieuwsbericht</h1>
                        <p class="text-right">datum van upload</p>
                    </div>
                </div>
                <!-- end loop -->
            <?php endfor ?>
        </div>
    </div>
    </div>
    <?php require("footer.html") ?>

</body>

</html>