<?php 
require "../../login/loginheader.php";
require '../db.php';
$page = $_GET["p"];
    if ( $page=="add") {
        
        $repormdl3  = $_POST['repormdl3'];
        $datosmdl3  = $_POST['datosmdl3'];
        
        // inserta data
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO graficas_genero (id_reporte,datos_generos) values(?, ?)";
            $stmt = $PDO->prepare($sql);
            $stmt->execute(array($repormdl3,$datosmdl3));
            //header("Location: index.php");
    }
?>