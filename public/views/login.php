<?php

session_start();
require("../../conn.php");
if (isset($_POST['submit'])) {
    if ($_POST['userfuni'] != "" || $_POST['password'] != "") {
        $username = $_POST['userfuni'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM `users` WHERE `Name`=? AND `Wachtwoord`=? ";
        $query = $dbh->prepare($sql);
        $query->execute(array($username, $password));
        $row = $query->rowCount();
        $fetch = $query->fetch();
        if ($row > 0) {
            $_SESSION['loggedInUser'] = $fetch["Name"];
            $_SESSION['id'] = $fetch['userid'];
            //zet hier waar de ingelogte user heen moet
            header('Location:admin.php');
            exit();
        } else {
            echo "oops something went wrong";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="px-8 py-6 mt-4 text-left bg-white shadow-lg">
            <div class="flex justify-center">
                <a rel="noopener noreferrer" href="#" class="flex justify-center space-x-3 md:justify-start">
                    <img class="w-9" src="https://cdn.discordapp.com/attachments/1036988455525294100/1075371430058930206/logo.png">
                </a>
            </div>
            <h3 class="text-2xl font-bold text-center">Login met je account</h3>
            <form method="POST">
                <div class="mt-4">
                    <div>
                        <label class="block" for="email">gebruikers naam<label>
                                <input type="text" name="userfuni" placeholder="gebruikers naam" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                                <span class="text-xs tracking-wide text-red-600">* gebruikers naam is verplicht </span>
                    </div>
                    <div class="mt-4">
                        <label class="block">Wachtwoord<label>
                                <input type="password" name="password" placeholder="Wachtwoord" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                                <span class="text-xs tracking-wide text-red-600">* Wachtwoord is verplicht </span>
                    </div>
                </div>
                <div class="flex items-baseline justify-between">
                    <input type="submit" value="login" name="submit" class=" px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue">
                    <a href=" #" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>