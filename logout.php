<?php
session_start();

if(!isset($_SESSION["isLogin"]) || empty($_SESSION["isLogin"]) ||$_SESSION["isLogin"] == 1)
{
    $_SESSION["isLogin"] =0;
}

header("Location: http://127.0.0.1:8000");
?>