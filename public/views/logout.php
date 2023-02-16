<?php

if (!isset($_SESSION['id'])) {
    header('Location:login.php');
    exit();
} ?>
<div class>
    <form method="post">
        <button class="bg-primary rounded-2xl p-2 text-white" name="logout" type="submit">log uit</button>
    </form>
</div>
<?php
if (isset($_POST["logout"])) {
    session_destroy();
    header('Location:login.php');
    die();
}
