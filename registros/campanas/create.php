<?php 
require "../../login/loginheader.php";
require '../db.php';

    if ( !empty($_POST)) {
        
        $cliente  = $_POST['cliente'];
        $logo  = $_POST['logo'];
        
        // inserta data
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO clientes (nombre_cliente,logo) values(?, ?)";
            $stmt = $PDO->prepare($sql);
            $stmt->execute(array($cliente,$logo));
            header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="../../css/bootstrap.min.css" rel="stylesheet">
    <script src="../../js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../../img/plataforma/favicon.jpeg">
    <title>Nuevo Cliente | JCdecaux</title>
</head>
 
<body>
<div class="container">
    
                    <div class="row">
                    <div class="row">
                        <h3>Crear Nuevo Cliente</h3>
                    </div>
            
                    <form method="POST" action="">
    <div class="form-group">
        <label for="inputGender">Nombre Cliente</label>
        <input type="text" class="form-control" required="required" id="inputName" name="cliente" placeholder="Nombre del Cliente">
    </div>
    <div class="form-group">
        <label for="inputGender">Imagen</label>
        <input type="text" class="form-control"  id="inputImagen" name="logo" placeholder="Nombre de logo">
    </div>
    
    <div class="form-actions">
        <button type="submit" class="btn btn-success">Crear</button>
        <a class="btn btn btn-default" href="index.php">Regresar</a>
    </div>
</form>
                
    </div> <!-- /row -->
    </div> <!-- /container -->

</body>
</html>