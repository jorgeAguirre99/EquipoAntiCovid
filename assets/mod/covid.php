<?php
        $fechaactual = date("d/m/Y");
        $hoy = date("d/m/Y",strtotime($fechaactual."- 1 days"));
        $today = date("Y-m-d");
        $sql1 = "SELECT SUM(`COL 3`) INFECTADOSES FROM `covid` where `COL 2` = '$hoy'";
        $sql2 = "SELECT SUM(`COL 7`) RECUPERADOSES FROM `covid` where `COL 2` = '$hoy'";
        $sql3 = "SELECT `COL 2` INFECTADOSMUNDO FROM `total_cases` where `COL 1` = '$today'";
        $result = $conexion->query($sql1);
        $row =  $result->fetch_object();
        $infectes = $row->INFECTADOSES;
        $result1 = $conexion->query($sql2);
        $row1 =  $result1->fetch_object();
        $recues = $row1->RECUPERADOSES;
        $result2 = $conexion->query($sql3);
        $row2 =  $result2->fetch_object();
        $infectados = $row2->INFECTADOSMUNDO;
?>