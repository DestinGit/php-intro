<?php session_start();

$ip = $_SESSION["ip"] ?? null;

if (!isset($_SESSION["login"]) || $ip != $_SERVER["REMOTE_ADDR"]) {
    $_SESSION["flash"] = "Vous devez vous authentifier";

    header("location:login.php");
}