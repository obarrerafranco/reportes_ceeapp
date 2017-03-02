<?php 
require "../../login/loginheader.php";
require '../db.php';
$page = $_GET["p"];
    if ( $page=="add") {
        
        $repormdl  = 1;//$_POST['repormdl'];
        $fechasmld  = 2;//$_POST['fechasmld'];
        $datosmdl  = 3;//$_POST['datosmdl'];
        
        // inserta data
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO graficas_general (id_reporte,fechas_general,datos_general) values(?, ?, ?)";
            $stmt = $PDO->prepare($sql);
            $stmt->execute(array($repormdl,$fechasmld,$datosmdl));
            header("Location: index.php");
    }
?>