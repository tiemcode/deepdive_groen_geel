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
            header('Location:inschijf_forolier.php');
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
    <title>Document</title>
</head>

<body>
    <h1>admin panel login</h1>
    <form method="POST">
        <input type="text" name="userfuni">
        <input type="password" name="password">
        <input type="submit" value="submit" name="submit">
    </form>
</body>

</html>