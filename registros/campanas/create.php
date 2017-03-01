<?php 
require "../../login/loginheader.php";
require '../db.php';

    if ( !empty($_POST)) {
        
        $campana  = $_POST['campana'];
        $header  = $_POST['header'];
        $cliente  = $_POST['cliente'];
        
        // inserta data
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO campanas (nombre_campana,id_cliente,img_header) values(?, ?, ?)";
            $stmt = $PDO->prepare($sql);
            $stmt->execute(array($campana,$cliente,$header));
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
<?php include('../menu.php'); ?>
<div class="container">
    
                    <div class="row">
                    <div class="row">
                        <h3>Crear Nueva Campaña</h3>
                    </div>
            
                    <form method="POST" action="">
    <div class="form-group">
        <label for="inputCampana">Nombre de la Campaña</label>
        <input type="text" class="form-control" required="required" id="inputCampana" name="campana" placeholder="Nombre de la campaña">
    </div>
    <div class="form-group">
        <label for="inputCliente">Cliente</label>
        <select class="form-control" required="required" id="inputCliente" name="cliente" placeholder="Cliente">
        <option></option>
        <?php 
           $client = 'SELECT id, nombre_cliente, estatus FROM clientes WHERE estatus = 1 ORDER BY nombre_cliente ASC';

            foreach ($PDO->query($client) as $cli1) {

                echo '<option value="'.$cli1['id'].'">'.utf8_encode($cli1['nombre_cliente']).'</option>';

            }
            ?>

        </select>
        
    </div>
    <div class="form-group">
        <label for="inputGender">Header</label>
        <input type="text" class="form-control"  id="inputHeader" name="header" placeholder="Nombre del header">
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