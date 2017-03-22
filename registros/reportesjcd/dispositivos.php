<?php 
require "../../login/loginheader.php";
require '../db.php';
$page = $_GET["p"];
    if ( $page=="add") {
        
        $repordismdl4  = $_POST['repordismdl4'];
        $datosdisp  = $_POST['datosdisp'];
        
        // inserta data
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO graficas_dispositivo_jcd (id_reporte,datos_dispositivos) values(?, ?)";
            $stmt = $PDO->prepare($sql);
            $stmt->execute(array($repordismdl4,$datosdisp));
            //header("Location: index.php");
    }
?>