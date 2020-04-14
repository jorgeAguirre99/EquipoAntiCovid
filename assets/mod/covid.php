<?php
        if($sw == false){
        $fecha = date("j/n/Y");
        //No toqueis este codigo, es sagrado, inutil pero sagrado-----------
        $fecha_partida = explode("/",$fecha);        
        $fecha_americana = $fecha_partida[1] ."/". $fecha_partida[0] ."/" . $fecha_partida[2];
        $fecha_1 = strtotime($fecha_americana."-1 days");
        $fecha_1 = date("j/n/Y",$fecha_1);
        //------------------------------------------------------------------
        $today = date("Y-m-d");
        $sql1 = "SELECT SUM(`COL 3`) AS INFECTADOSES FROM `covid` where `COL 2` = '$fecha_1';";
        $sql2 = "SELECT SUM(`COL 7`) AS RECUPERADOSES FROM `covid` where `COL 2` = '$fecha_1';";
        $sql3 = "SELECT `COL 2` AS INFECTED FROM `total_cases` where `COL 1` = '$today';";
        $result = $conexion->query($sql1);
        $row =  $result->fetch_object();
        $infectes = number_format($row->INFECTADOSES,0,',','.');
        $result1 = $conexion->query($sql2);
        $row1 =  $result1->fetch_object();
        $recues = number_format($row1->RECUPERADOSES, 0, ',','.');
        $result2 = $conexion->query($sql3);
        $row2 =  $result2->fetch_object();
        $infectados = number_format($row2->INFECTED, 2, ',','.');
        
        }else{
                $fecha = date("j/n/Y");
                //No toqueis este codigo, es sagrado, inutil pero sagrado-----------
                $fecha_partida = explode("/",$fecha);        
                $fecha_americana = $fecha_partida[1] ."/". $fecha_partida[0] ."/" . $fecha_partida[2];
                $fecha_1 = strtotime($fecha_americana."-2 days");
                $fecha_1 = date("j/n/Y",$fecha_1);
                //------------------------------------------------------------------
                $today1 = date("Y-m-d");
                $today = strtotime($today1."-1 days");
                $today = date("Y-m-d",$today);
                $sql1 = "SELECT SUM(`COL 3`) AS INFECTADOSES FROM `covid` where `COL 2` = '$fecha_1';";
                $sql2 = "SELECT SUM(`COL 7`) AS RECUPERADOSES FROM `covid` where `COL 2` = '$fecha_1';";
                $sql3 = "SELECT `COL 2` AS INFECTED FROM `total_cases` where `COL 1` = '$today';";
                $result = $conexion->query($sql1);
                $row =  $result->fetch_object();
                $infectes = number_format($row->INFECTADOSES,0,',','.');
                $result1 = $conexion->query($sql2);
                $row1 =  $result1->fetch_object();
                $recues = number_format($row1->RECUPERADOSES, 0, ',','.');
                $result2 = $conexion->query($sql3);
                $row2 =  $result2->fetch_object();
                $infectados = number_format($row2->INFECTED, 2, ',','.');

        }
?>