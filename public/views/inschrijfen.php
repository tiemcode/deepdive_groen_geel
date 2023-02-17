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
    <link rel="stylesheet" href="../dist/style.css">
    <title>Document</title>
</head>

<body>
    <?php include("nav.html") ?>
    <div class="overflow-hidden rounded-lg bg-white shadow mx-auto pt-32 px-6 max-w-7xl">
        <div class="px-4 py-5  sm:p-6">
            <div class="mt-5 w-10/12 md:col-span-2 md:mt-0">
                <h1 class="font-semibold text-xl~">schijf je in</h1>
                <form action="#" method="POST">
                    <div class="overflow-hidden shadow sm:rounded-md">
                        <div class="bg-white px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700">voor naam</label>
                                    <input type="text" name="first-name" id="first-name"  class="mt-1 border p-1 block w-full rounded-md border-zinc-400 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">achter naam</label>
                                    <input type="text" name="last-name" id="last-name"  class="mt-1 block p-1 border w-full rounded-md border-zinc-400 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="street-address" class="block text-sm font-medium text-gray-700">telefoon nummer</label>
                                    <input type="text" name="email-address" id="email-address"  class="mt-1 p-1 border block w-full rounded-md border-zinc-500 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>


                                <div class="col-span-6">
                                    <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                                    <input type="tel" name="nummer" id="street-address"  class="mt-1 p-1 block  border w-full rounded-md border-zinc-400 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="city" class="block text-sm font-medium text-gray-700">bericht</label>
                                    <textarea name="bericht" id="city" class="mt-1 block w-full rounded-md p-1  border border-zinc-400 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                                </div>


                                </< /div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-primary py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include("footer.html") ?>
</body>

</html>