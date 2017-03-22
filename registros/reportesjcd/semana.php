<?php 
require "../../login/loginheader.php";
require '../db.php';
$page = $_GET["p"];
    if ( $page=="add") {
        
        $repormd2  = $_POST['repormd2'];
        $fechasmld2  = $_POST['fechasmld2'];
        $scansmdl  = $_POST['scansmdl'];
        $viewsmdl  = $_POST['viewsmdl'];
        
        // inserta data
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO graficas_semana_jcd (id_reporte,fechas_semana,scans_semana, views_semana) values(?, ?, ?, ?)";
            $stmt = $PDO->prepare($sql);
            $stmt->execute(array($repormd2,$fechasmld2,$scansmdl,$viewsmdl));
            //header("Location: index.php");
    }
?>