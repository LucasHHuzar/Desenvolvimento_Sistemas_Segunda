<?php

    require_once "header.php";

    session_start();
    unset($_SESSION["usuario"]);
    unset($_SESSION["cod_usuario"]);

    header("Location: login.php");
?>