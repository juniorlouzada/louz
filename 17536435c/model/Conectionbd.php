<?php
    $local = "localhost";
    $user = "root";
    $password = "";
    $baseDados = "mapaphp";

    return $conectar = new mysqli($local, $user, $password, $baseDados);
?>
