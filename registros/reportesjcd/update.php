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
        $camapan  = $_POST['campana'];
        $ciudad  = $_POST['ciudad'];
        $semana  = $_POST['semana'];
        $noscan  = $_POST['no_scans'];
        $noview  = $_POST['no_views'];
        $hora  = $_POST['hora'];
        $porce  = $_POST['porcent'];
        
        // update data
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "Update reportes_clientes set id_campana=?,id_ciudad=?,id_semana=?,no_scans=?,no_views=?,best_hour=?,porcen_total=? where id=?";
            $stmt = $PDO->prepare($sql);
            $stmt->execute(array($camapan,$ciudad,$semana,$noscan,$noview,$hora,$porce,$id));
            $PDO = null;
            header("Location: index.php");
    }
    else{
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM reportes_clientes where id = ?";
        $stmt = $PDO->prepare($sql);
        $stmt->execute(array($id));
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
       //$PDO = null;
        if (empty($data)){
            header("Location: index.php");
        }
        $camapan  = $data['id_campana'];
        $ciudad  = $data['id_ciudad'];
        $semana  = $data['id_semana'];
        $noscan  = $data['no_scans'];
        $noview  = $data['no_views'];
        $hora  = $data['best_hour'];
        $porce  = $data['porcen_total'];
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
                        <h3>Actualizar Reporte</h3>
                    </div>
            
                    <form method="POST" action="update.php?id=<?php echo $id?>">
                     <div class="form-group">
                            <label for="inputCampana">Campaña</label>
                            <select class="form-control" required="required" id="inputCampana" name="campana" placeholder="Campaña">
                               <?php 
                               $campna= 'SELECT id, nombre_campana, status FROM campanas WHERE status = 1 ORDER BY nombre_campana ASC';
                                foreach ($PDO->query($campna) as $camp1) {

                                    $optin1 = '<option value="'.$camp1['id'].'" ';

                                    if($camp1['id'] == trim($camapan)) {

                                    $optin1 .= 'selected="selected"'; }

                                    $optin1 .= '>'.utf8_encode($camp1['nombre_campana']).'</option>';

                                    echo $optin1;

                                }
                                ?> 
                            </select>
                            
                        </div>
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
                        <div class="form-group">
                            <label for="inputScans"># Scans</label>
                            <input type="text" class="form-control" id="inputScans" name="no_scans" value="<?php echo $noscan; ?>" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="inputViews"># Views</label>
                            <input type="text" class="form-control" id="inputViews" name="no_views" value="<?php echo $noview; ?>" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="inputHour">Mejor Hora</label>
                            <input type="text" class="form-control" id="inputHour" name="hora" value="<?php echo $hora; ?>" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="inputPorcen">Porcentaje</label>
                            <input type="text" class="form-control" id="inputPorcen" name="porcent" value="<?php echo $porce; ?>" autocomplete="off">
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