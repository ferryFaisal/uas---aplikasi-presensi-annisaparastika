<?php

session_start();

if (isset($_SESSION['login'])) {
    unset($_SESSION);

    session_destroy();

//
    die("Silahkan login <a href='login.php'>di sini</a>");
}