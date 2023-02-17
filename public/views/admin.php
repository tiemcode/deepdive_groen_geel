<?php
session_start();
require("../../conn.php");
if (isset($_POST["opslaan_blog"])) {
    $kaas = "INSERT INTO `blog` (`titel`,`bericht` ,`gemaakt_op`)
    VALUES(
        '{$_POST['titel']}',
        '{$_POST['bericht']}',
        CURRENT_TIMESTAMP)";
    $add_update = $dbh->query($kaas);
    // header("Location: index.php");
};

$allpeople = $dbh->query("SELECT * FROM `lidmaatschap`")->fetchall();
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

<body>
    <?php include("nav.html"); ?>
    <div class="pt-32 flex justify-evenly ">
        <div>
            <?php include("logout.php") ?>
        </div>
        <h1 class="font-bold text-3xl">welkom <?= $_SESSION['loggedInUser'] ?> </h1>
        <div id="header">
            <h4 class="bg-primary rounded-2xl p-2 text-white"><a href="index.php">ga terug</a></h4>
        </div>
    </div>
    <div id="container_blog" class="pt-32  flex justify-center items-center flex-col">
        <h1 class="font-bold text-xl pb-6  ">maak een blog post aan</h1>
        <div class="w-2/5 overflow-hidden rounded-lg bg-white shadow-2xl">
            <div class=" px-4 py-5 sm:p-6">
                <form class=" space-y-6" action="#" method="POST">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">titel</label>
                        <div class="mt-1">
                            <input name="titel" id="title" class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                        </div>
                    </div>
                    <div>
                        <label for="bericht" class="block text-sm font-medium text-gray-700 ">bericht</label>
                        <div class="mt-1">
                            <textarea id="bericht" name="bericht" class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"></textarea>
                        </div>
                    </div>
                    <div>
                        <button type="submit" name="opslaan_blog" class="flex w-full justify-center rounded-md border border-transparent bg-primary py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">plaats</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="container_inschijf" class="pt-32  flex justify-center items-center flex-col">
        <h1 class="font-bold text-xl pb-6">inschijf formulier</h1>
        <div class="overflow-hidden rounded-lg w-2/5 bg-white shadow-2xl">
            <div class=" px-4 py-5 sm:p-6">
                <div class="px-6 lg:px-8">
                    <div class="mt-7 flow-root">
                        <div class="-my-2 -mx-6 overflow-x-auto lg:-mx-8">
                            <div class="inline-block min-w-full pb-2 align-middle sm:px-6 lg:px-8">
                                <table class="min-w-full divide-y divide-gray-300">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Voornaam</th>
                                            <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-gray-900">Achternaam</th>
                                            <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-gray-900">Email</th>
                                            <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-gray-900">Telefoon</th>
                                            <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-gray-900">bericht</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200">
                                        <?php foreach ($allpeople as $key) { ?>
                                            <tr>
                                                <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900 sm:pl-0"><?= $key["voornaam"]; ?></td>
                                                <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-500"><?= $key['achternaam'] ?></td>
                                                <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-500"><?= $key["email"] ?></td>
                                                <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-500"><?= $key['telefoon'] ?></td>
                                                <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-500"><?= $key['bericht'] ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer.html") ?>
</body>

</html>