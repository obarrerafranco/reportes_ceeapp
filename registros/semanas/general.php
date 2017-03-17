<?php 
require "../../login/loginheader.php";
require '../db.php';
$page = $_GET["p"];
    if ( $page=="add") {
        
        $repormdl  = $_POST['repormdl'];
        $fechasmld  = $_POST['fechasmld'];
        $datosmdl  = $_POST['datosmdl'];
        
        // inserta data
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO graficas_general (id_reporte,fechas_general,datos_general) values(?, ?, ?)";
            $stmt = $PDO->prepare($sql);
            $stmt->execute(array($repormdl,$fechasmld,$datosmdl));
            //header("Location: index.php");
    }
?>