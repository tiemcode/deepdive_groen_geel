<?php

if (!isset($_SESSION['id'])) {
    header('Location:login.php');
    exit();
} ?>
<div id="logout">
    <form method="post">
        <button name="logout" type="submit">log uit</button>
    </form>
</div>
<?php
if (isset($_POST["logout"])) {
    session_destroy();
    header('Location:login.php');
    die();
}
echo $_SESSION['id'];
