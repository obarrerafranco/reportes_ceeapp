<?php 
require "../../login/loginheader.php";
require '../db.php';

    if ( !empty($_POST)) {
        
        $ciudad  = $_POST['ciudad'];
        $semana  = $_POST['semana'];
        $wk_scans  = $_POST['wk_no_scans'];
        $prom_wk_scans  = $_POST['prom_no_scans'];
        $wk_views  = $_POST['wk_no_views'];
        $prom_wk_views  = $_POST['prom_no_views'];
        $tota_views  = $_POST['tota_views_anno'];
        $d_andro  = $_POST['d_android'];
        $d_ios  = $_POST['d_ios'];
        $d_wind  = $_POST['d_windows'];
        $masp  = $_POST['mapas'];
        
        // inserta data
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO reportes_jcdecaux(id_ciudad,id_semana,scans_total_semana,scans_promedio_diario,views_total_semana,views_promedio_diario,views_total_year,download_android,download_ios,download_windows,mapa_ciudad) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $PDO->prepare($sql);
            $stmt->execute(array($ciudad,$semana,$wk_scans,$prom_wk_scans,$wk_views,$prom_wk_views,$tota_views,$d_andro,$d_ios,$d_wind,$masp));
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
                        <h3>Crear Nuevo Reporte General JCDecaux</h3>
                    </div>
            
   <form method="POST" action="">
      
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
    <hr />
    <div class="form-group">
        <label for="inputScans_wk">Total Scans Semana</label>
        <input type="number" class="form-control"  id="inputScans_wk" name="wk_no_scans" placeholder="# Scans Semana" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="inputScans_prom">Promedio Scans Semana</label>
        <input type="number" class="form-control"  id="inputScans_prom" name="prom_no_scans" placeholder="Promedio Scans Semana" autocomplete="off">
    </div>
    <hr />
    <div class="form-group">
        <label for="inputViews_wk">Total Views Semana</label>
        <input type="number" class="form-control"  id="inputViews_wk" name="wk_no_views" placeholder="Total Views Semana" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="inputViews_prom">Promedio Views Semana</label>
        <input type="number" class="form-control"  id="inputViews_prom" name="prom_no_views" placeholder="Promedio Views Semana" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="inputViews_year">Total Views Año</label>
        <input type="number" class="form-control"  id="inputViews_year" name="tota_views_anno" placeholder="Total views año" autocomplete="off">
    </div>
    <hr />
    <div class="form-group">
        <label for="inputAndroid">Descargas Android</label>
        <input type="number" class="form-control"  id="inputAndroid" name="d_android" placeholder="Total Android" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="inputIos">Descargas IOS</label>
        <input type="number" class="form-control"  id="inputIos" name="d_ios" placeholder="Total IOS" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="inputWindows">Descargas Windows</label>
        <input type="number" class="form-control"  id="inputWindows" name="d_windows" placeholder="Total Windows" autocomplete="off">
    </div>
    <hr />
    <div class="form-group">
        <label for="inputMap">Mapa</label>
        <input type="text" class="form-control"  id="inputMap" name="mapas" placeholder="Mapa de la ciudad" autocomplete="off">
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