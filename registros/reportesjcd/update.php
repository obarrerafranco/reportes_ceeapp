<?php
require "../../login/loginheader.php";
require '../db.php';

    $id = null;
    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
    }
    if($id == null)
    {
        header("Location: index.php");
    } 
    if ( !empty($_POST))
    {
        
        // post values
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
        
        // update data
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "Update reportes_jcdecaux set id_ciudad=?,id_semana=?,scans_total_semana=?,scans_promedio_diario=?,views_total_semana=?,views_promedio_diario=?,views_total_year=?,download_android=?,download_ios=?,download_windows=?,mapa_ciudad=? where id=?";
            $stmt = $PDO->prepare($sql);
            $stmt->execute(array($ciudad,$semana,$wk_scans,$prom_wk_scans,$wk_views,$prom_wk_views,$tota_views,$d_andro,$d_ios,$d_wind,$masp,$id));
            $PDO = null;
            header("Location: index.php");
    }
    else{
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM reportes_jcdecaux where id = ?";
        $stmt = $PDO->prepare($sql);
        $stmt->execute(array($id));
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
       //$PDO = null;
        if (empty($data)){
            header("Location: index.php");
        }

        $ciudad  = $data['id_ciudad'];
        $semana  = $data['id_semana'];
        $wk_scans  = $data['scans_total_semana'];
        $prom_wk_scans  = $data['scans_promedio_diario'];
        $wk_views  = $data['views_total_semana'];
        $prom_wk_views  = $data['views_promedio_diario'];
        $tota_views  = $data['views_total_year'];
        $d_andro  = $data['download_android'];
        $d_ios  = $data['download_ios'];
        $d_wind  = $data['download_windows'];
        $masp  = $data['mapa_ciudad'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link   href="../../css/bootstrap.min.css" rel="stylesheet">
    <script src="../../js/bootstrap.min.js"></script>
        <title>Actualizar Reporte | JCdecaux</title>
</head>
 
<body>
<?php include('../menu.php'); ?>
<div class="container">
    
                    <div class="row">
                    <div class="row">
                        <h3>Actualizar Reporte JCDecaux</h3>
                    </div>
            
                    <form method="POST" action="update.php?id=<?php echo $id?>">
                      <div class="form-group">
                            <label for="inputCiudad">Ciudad</label>
                            <select class="form-control" required="required" id="inputCiudad" name="ciudad" placeholder="Ciudad">
                               <?php 
                               $ciudade= 'SELECT id, nombre_ciudad, estatus FROM ciudades WHERE estatus = 1 ORDER BY nombre_ciudad ASC';
                                foreach ($PDO->query($ciudade) as $ciu1) {

                                    $optin2 = '<option value="'.$ciu1['id'].'" ';

                                    if($ciu1['id'] == trim($ciudad)) {

                                    $optin2 .= 'selected="selected"'; }

                                    $optin2 .= '>'.utf8_encode($ciu1['nombre_ciudad']).'</option>';

                                    echo $optin2;

                                }
                                ?> 
                            </select>
                            
                        </div>
                        <div class="form-group">
                            <label for="inputSemana">Semana</label>
                            <select class="form-control" required="required" id="inputSemana" name="semana" placeholder="Semana">
                               <?php 
                               $ciudade= 'SELECT id, semana, year, estatus FROM semanas WHERE estatus = 1 ORDER BY id DESC';
                                foreach ($PDO->query($ciudade) as $wee1) {

                                    $optin3 = '<option value="'.$wee1['id'].'" ';

                                    if($wee1['id'] == trim($semana)) {

                                    $optin3 .= 'selected="selected"'; }

                                    $optin3 .= '>'.utf8_encode($wee1['semana'].'-'.$wee1['year']).'</option>';

                                    echo $optin3;

                                }
                                ?> 
                            </select>
                            
                        </div>
                        <hr />
                        <div class="form-group">
                            <label for="inputScans_wk">Total Scans Semana</label>
                            <input type="number" class="form-control"  id="inputScans_wk" name="wk_no_scans" placeholder="# Scans Semana" autocomplete="off" value="<?php echo $wk_scans; ?>">
                        </div>
                        <div class="form-group">
                            <label for="inputScans_prom">Promedio Scans Semana</label>
                            <input type="number" class="form-control"  id="inputScans_prom" name="prom_no_scans" placeholder="Promedio Scans Semana" autocomplete="off" value="<?php echo $prom_wk_scans; ?>">
                        </div>
                        <hr />
                        <div class="form-group">
                            <label for="inputViews_wk">Total Views Semana</label>
                            <input type="number" class="form-control"  id="inputViews_wk" name="wk_no_views" placeholder="Total Views Semana" autocomplete="off" value="<?php echo $wk_views; ?>">
                        </div>
                        <div class="form-group">
                            <label for="inputViews_prom">Promedio Views Semana</label>
                            <input type="number" class="form-control"  id="inputViews_prom" name="prom_no_views" placeholder="Promedio Views Semana" autocomplete="off" value="<?php echo $prom_wk_views; ?>">
                        </div>
                        <div class="form-group">
                            <label for="inputViews_year">Total Views Año</label>
                            <input type="number" class="form-control"  id="inputViews_year" name="tota_views_anno" placeholder="Total views año" autocomplete="off" value="<?php echo $tota_views; ?>">
                        </div>
                        <hr />
                        <div class="form-group">
                            <label for="inputAndroid">Descargas Android</label>
                            <input type="number" class="form-control"  id="inputAndroid" name="d_android" placeholder="Total Android" autocomplete="off" value="<?php echo $d_andro; ?>">
                        </div>
                        <div class="form-group">
                            <label for="inputIos">Descargas IOS</label>
                            <input type="number" class="form-control"  id="inputIos" name="d_ios" placeholder="Total IOS" autocomplete="off" value="<?php echo $d_ios; ?>">
                        </div>
                        <div class="form-group">
                            <label for="inputWindows">Descargas Windows</label>
                            <input type="number" class="form-control"  id="inputWindows" name="d_windows" placeholder="Total Windows" autocomplete="off" value="<?php echo $d_wind; ?>">
                        </div>
                        <hr />
                        <div class="form-group">
                            <label for="inputMap">Mapa</label>
                            <input type="text" class="form-control"  id="inputMap" name="mapas" placeholder="Mapa de la ciudad" autocomplete="off" value="<?php echo $masp; ?>">
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                            <a class="btn btn btn-default" href="index.php">Regresar</a>
                        </div>
                        <br />
                     </form>
                
    </div> <!-- /row -->
    </div> <!-- /container -->
</body>
</html>