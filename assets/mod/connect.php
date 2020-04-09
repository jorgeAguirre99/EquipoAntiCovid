<?php
    $host_db    = "db5000356177.hosting-data.io";
    $user_db    = "dbu467276";
    $pass_db    = "eQu1p0_@nt1_C0vid_2020";
    $db_name    = "dbs346381";
    $conexion       = new mysqli($host_db, $user_db, $pass_db, $db_name);
    $acentos         = $conexion->query("SET NAMES 'utf8'");
    if ($conexion->connect_error) {
        die("La conexion falló: " . $conexion->connect_error);
    }
    ?>