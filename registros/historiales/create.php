<?php 
require "../../login/loginheader.php";
require '../db.php';

    if ( !empty($_POST)) {
        
        $cliente  = $_POST['cliente'];
        $ciudad  = $_POST['ciudad'];
        $semana    = $_POST['semana'];
        $imagen = $_POST['imagen'];
        
        // inserta data
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO historial (id_cliente,id_ciudad,id_semana,imagen) values(?, ?, ?, ?)";
            $stmt = $PDO->prepare($sql);
            $stmt->execute(array($cliente,$ciudad,$semana,$imagen));
            //$PDO = null;
            header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link   href="../../css/bootstrap.min.css" rel="stylesheet">
    <script src="../../js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../../img/plataforma/favicon.jpeg">
    <title>Registro de Historiales | JCdecaux</title>
</head>
 
<body>
<?php include('../menu.php'); ?>
<div class="container">
    
                    <div class="row">
                    <div class="row">
                        <h3>Crear Nuevo Historial</h3>
                    </div>
            
                    <form method="POST" action="">
    <div class="form-group">
        <label for="inputGender">Cliente</label>
        <select class="form-control" required="required" id="inputCliente" name="cliente" placeholder="Cliente" autocomplete="off">
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
        <label for="inputGender">Ciudad</label>
        <select class="form-control" required="required" id="inputCiudad" name="ciudad" placeholder="Ciudad">
        <option></option>
         <?php 
           $ciudade = 'SELECT id, nombre_ciudad, estatus FROM ciudades WHERE estatus = 1 ORDER BY nombre_ciudad ASC';

            foreach ($PDO->query($ciudade) as $ciu1) {

                echo '<option value="'.$ciu1['id'].'">'.utf8_encode($ciu1['nombre_ciudad']).'</option>';

            }
            ?>
        </select>
        
    </div>
    <div class="form-group">
        <label for="inputGender">Semana</label>
        <select class="form-control" required="required" id="inputSemana" name="semana" placeholder="semana">
        <option></option>
         <?php 
           $seman= 'SELECT id, semana, year, estatus FROM semanas WHERE estatus = 1 ORDER BY id DESC';

            foreach ($PDO->query($seman) as $wee1) {

                echo '<option value="'.$wee1['id'].'">'.$wee1['semana'].'-'.$wee1['year'].'</option>';

            }
            ?>
        </select>  
    </div>
    <div class="form-group">
        <label for="inputImagen">Imagen</label>
        <input type="text" class="form-control" required="required" id="inputImagen" name="imagen" placeholder="Nombre de la Imagen" autocomplete="off">
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