<?php


if (isset($_POST["signup"])) {

    require_once "functions.inc.php";

    $fullname = sanitizeData($_POST["fullname"]);
    $email = sanitizeData($_POST["email"]);
    $username = sanitizeData($_POST["username"]);
    $pwd = sanitizeData($_POST["pwd"]);
    $confirm_pwd = sanitizeData($_POST["cpwd"]);
    $role = $_POST["role"];

    require_once "dbhandler.inc.php";

    if (emptySignupInput($fullname, $email, $username, $pwd, $confirm_pwd)) {
        header("location: ../signup.php?error=empty_input");
        exit();
    }
    if (invalidEmail($email)) {
        header("location: ../signup.php?error=invalid_email");
        exit();
    }
    if (invalidUsername($username)) {
        header("location: ../signup.php?error=invalid_username");
        exit();
    }
    if (pwdMatch($pwd, $confirm_pwd)) {
        header("location: ../signup.php?error=passwords_dont_match");
        exit();
    }
    if (userAlreadyExists($conn, $username, $email)) {
        header("location: ../signup.php?error=user_already_exits");
        exit();
    }

    createUser($conn, $fullname, $email, $username, $pwd, $role);
} else {
    header("location: ../signup.php?notfound=zero");
    exit();
}
