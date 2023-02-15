<?php
require("nav.html");
?>
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
    <div class="w-full -z-10">
        <div class=" w-full h-1/3 sm:h1/2 md:h-2/3 lg:h-5/6 opacity-40 bg-dark-gray absolute z-0"></div>
        <img src="../img/team.png" alt="" width="10%" height="auto" class="object-cover w-full h-1/3 sm:h-1/2 md:h-2/3 lg:h-5/6 -z-10 relative">
    </div>
    <div class="container mx-auto px-6 max-w-7xl -mt-20 md:-mt-72 lg:-mt-96 z-10 relative">
        <!-- hero -->
        <h1 class="max-lg:text-center text-3xl sm:text-5xl md:text-6xl lg:text-7xl text-white mb-9">Titel van nieuwsbericht</h1>
        <div class="btn py-3 rounded-md max-md:mx-auto w-fit max-sm: max-md:mt-16 max-md:mb-8">
            <a href="#" class="px-5 py-3 rounded-md bg-primary text-white text-center lg:mt-9 text-xl">Lees meer</a>
        </div>
        <!-- all cards -->
        <div class="grid grid-cols-1 grid-rows-3 md:grid-cols-3 md:grid-rows-1 gap-5 md:mt-16 lg:mt-24">
            <!-- card -->
            <div class="card rounded-md shadow-md bg-white">
                <img src="../img/team.png" alt="" width="100%" height="auto" class="rounded-t-md object-cover">
                <div class="px-3 py-5 flex justify-between">
                    <h1 class="font-bold">Titel nieuwsbericht</h1>
                    <p class="text-right">datum van upload</p>
                </div>
            </div>
            <!-- card -->
            <div class="card rounded-md shadow-md bg-white">
                <img src="../img/team.png" alt="" width="100%" height="auto" class="rounded-t-md ">
                <div class="px-3 py-5 flex justify-between">
                    <h1 class="font-bold">Titel nieuwsbericht</h1>
                    <p class="text-right">datum van upload</p>
                </div>
            </div>
            <!-- card -->
            <div class="card rounded-md shadow-md bg-white">
                <img src="../img/team.png" alt="" width="100%" height="auto" class="rounded-t-md ">
                <div class="px-3 py-5 flex justify-between">
                    <h1 class="font-bold">Titel nieuwsbericht</h1>
                    <p class="text-right">datum van upload</p>
                </div>
            </div>
        </div>
        <div class="btn bg-primary text-white rounded-md px-5 py-4 text-center mt-10 md:max-w-lg mx-auto">
            <a href="" class="text-lg">Meer nieuws verslagen lezen?</a>
        </div>

        <h1 class="text-primary  text-2xl md:text-3xl mx-auto w-fit mt-12 md:mt-24 lg:mt-32">Wij zijn trots op onze sponsors</h1>

        <div class="balk w-96 lg:w-800 h-4 flex mx-auto my-4 md:my-8">
            <div class="green bg-primary w-52 lg:w-400 h-4 absolute"></div>
            <div class="bg-secondary w-96 md:w-800 h-4"></div>
        </div>

        <div class="sponsors grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <img src="../img/sponsors/050_vastgoed.png" alt="">
            <img src="../img/sponsors/800px-ING_Group_N.V._Logo.svg_-1.png" alt="">
            <img src="../img/sponsors/baxbier.png" alt="">
            <img src="../img/sponsors/bouwhuis.png" alt="">
            <img src="../img/sponsors/caroutlet.png" alt="">
            <img src="../img/sponsors/fotofabriek.png" alt="">
            <img src="../img/sponsors/MCZBW.png" alt="">
            <img src="../img/sponsors/newnexus.png" alt="">
            <img src="../img/sponsors/rinus.png" alt="">
            <img src="../img/sponsors/tafelsmaak.png" alt="">
            <img src="../img/sponsors/tribus_zwart.png" alt="">
        </div>
    </div>
</body>

</html>