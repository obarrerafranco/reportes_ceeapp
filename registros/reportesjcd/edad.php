<?php 
require "../../login/loginheader.php";
require '../db.php';
$page = $_GET["p"];
    if ( $page=="add") {
        
        $repormdl4  = $_POST['repormdl4'];
        $datosmdl4  = $_POST['datosmdl4'];
        
        // inserta data
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO graficas_edad_jcd (id_reporte,datos_edad) values(?, ?)";
            $stmt = $PDO->prepare($sql);
            $stmt->execute(array($repormdl4,$datosmdl4));
            //header("Location: index.php");
    }
?>