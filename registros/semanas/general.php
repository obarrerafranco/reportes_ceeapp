<?php 
require "../../login/loginheader.php";
require '../db.php';
$page = $_GET["p"];
    if ( $page=="add") {
        
        $semansmdl  = $_POST['semansmdl'];
        $fechasmld  = $_POST['fechasmld'];
        $datosmdl  = $_POST['datosmdl'];
        
        // inserta data
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO graficas_general (id_semana,fechas_general,datos_general) values(?, ?, ?)";
            $stmt = $PDO->prepare($sql);
            $stmt->execute(array($semansmdl,$fechasmld,$datosmdl));
            //header("Location: index.php");
    }
?>