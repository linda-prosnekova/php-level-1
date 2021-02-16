<?php
session_start();
$session = session_id();

define("SALT", "sdgh23egfbh55t3423");

if (!empty($_COOKIE['login'])) {
    if ($_COOKIE['login'] == md5('admin' . SALT)) {
        $user_name = "admin";
        $auth = true;
    }
}

if (isset($_GET['logout'])) {
    setcookie("login", "", time() - 1, "/");
    header("Location: /");
    die();
}

if (!empty($_POST)) {
    $login = $_POST['login'];
    $pass = $_POST['password'];
    if ($login == "admin" && $pass == "1234") {
        setcookie("login", md5($login . SALT), time() + 3600, "/");
        header("Location: /");
        die();
    }
}
