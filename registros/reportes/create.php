<?php 
require "../../login/loginheader.php";
require '../db.php';

    if ( !empty($_POST)) {
        
        $campana  = $_POST['campana'];
        $ciudad  = $_POST['ciudad'];
        $semana  = $_POST['semana'];
        $tsemana  = $_POST['textow'];
        $scans  = $_POST['no_scans'];
        $views  = $_POST['no_views'];
        $hora  = $_POST['hora'];
        $porcent  = $_POST['porcent'];
        
        // inserta data
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO reportes_clientes (id_campana,id_ciudad,id_semana,text_semana,no_scans,no_views,best_hour,porcen_total) values(?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $PDO->prepare($sql);
            $stmt->execute(array($campana,$ciudad,$semana,$tsemana,$scans,$views,$hora,$porcent));
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
    <title>Nuevo Reporte | JCdecaux</title>
</head>
 
<body>
<?php include('../menu.php'); ?>
<div class="container">
    
                    <div class="row">
                    <div class="row">
                        <h3>Crear Nuevo Reporte</h3>
                    </div>
            
   <form method="POST" action="">
      <div class="form-group">
        <label for="inputCampana">Campaña</label>
        <select class="form-control" required="required" id="inputCampana" name="campana" placeholder="Campaña">
        <option></option>
        <?php 
           $client = 'SELECT id, nombre_campana, status FROM campanas WHERE status = 1 ORDER BY nombre_campana ASC';

            foreach ($PDO->query($client) as $cli1) {

                echo '<option value="'.$cli1['id'].'">'.utf8_encode($cli1['nombre_campana']).'</option>';

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
        <label for="inputTextw">Texto de la Semana</label>
        <input type="text" class="form-control"  id="inputTextw" name="textow" placeholder="Dia DE Mes AL Dia DE Mes">
    </div>
    <div class="form-group">
        <label for="inputScans"># Scans</label>
        <input type="text" class="form-control"  id="inputScans" name="no_scans" placeholder="# scans">
    </div>
    <div class="form-group">
        <label for="inputViews"># Views</label>
        <input type="text" class="form-control"  id="inputViews" name="no_views" placeholder="# views">
    </div>
    <div class="form-group">
        <label for="inputHour">Mejor Hora</label>
        <input type="text" class="form-control"  id="inputHour" name="hora" placeholder="Hora PM Cantidad SCANS">
    </div>
   <div class="form-group">
        <label for="inputPorcen">Porcentaje</label>
        <input type="text" class="form-control"  id="inputPorcen" name="porcent" placeholder="Porcentaje de Scans">
    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-success">Crear</button>
        <a class="btn btn btn-default" href="index.php">Regresar</a>
    </div>
    <br />
</form>
                
    </div> <!-- /row -->
    </div> <!-- /container -->

    <script type="text/javascript" src="../../js/functions.js"></script>

</body>
</html>