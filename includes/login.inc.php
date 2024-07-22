<?php

if (isset($_POST["submit"])) {
    require_once "functions.inc.php";

    $username = sanitizeData($_POST["username"]);
    $pwd = sanitizeData($_POST["pwd"]);

    require_once "dbhandler.inc.php";

    if (emptyLoginInput($username, $pwd)) {
        header("location: ../login.php?error=empty_input");
        exit();
    }

    loginUser($conn, $username, $pwd);

} else {
    header("location: ../login.php");
    exit();
}