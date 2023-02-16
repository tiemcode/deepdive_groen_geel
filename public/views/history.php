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
  <link rel="stylesheet" href="../dist/style.css">
  <title>Document</title>
</head>

<body>
  <?php include("../views/nav.html") ?>
  <div id="container" class="pt-32  flex justify-center items-center flex-col">
  <h1 class="font-bold text-xl">inschijf formulier</h1>
    <div class="overflow-hidden rounded-lg bg-white shadow-xl">
      <div class="px-4 py-5 sm:p-6">
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
  <?php include("../views/footer.html") ?>
</body>

</html>