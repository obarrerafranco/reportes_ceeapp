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
       $cliente2  = $_POST['cliente'];
        $ciudad2  = $_POST['ciudad'];
        $semana2    = $_POST['semana'];
        $imagen2 = $_POST['imagen'];
        
        // update data
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "Update historial set id_cliente=?,id_ciudad=?,id_semana=?,imagen=? where id=?";
            $stmt = $PDO->prepare($sql);
            $stmt->execute(array($cliente2,$ciudad2,$semana2,$imagen2,$id));
            $PDO = null;
            header("Location: index.php");
    }
    else{
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM historial where id = ?";
        $stmt = $PDO->prepare($sql);
        $stmt->execute(array($id));
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
       //$PDO = null;
        if (empty($data)){
            header("Location: index.php");
        }
        $cliente  = $data['id_cliente'];
        $ciudad  = $data['id_ciudad'];
        $semana    = $data['id_semana'];
        $imagen = $data['imagen'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link   href="../../css/bootstrap.min.css" rel="stylesheet">
    <script src="../../js/bootstrap.min.js"></script>
</head>
 
<body>
<?php include('../menu.php'); ?>
<div class="container">
    
                    <div class="row">
                    <div class="row">
                        <h3>Actualizar Historial</h3>
                    </div>
            
                    <form method="POST" action="update.php?id=<?php echo $id?>">
                      <div class="form-group">
                        <label for="inputCliente">Cliente</label>
                        <select class="form-control" required="required" id="inputCliente" name="cliente" placeholder="Cliente">
                        <?php 
                            $client = 'SELECT id, nombre_cliente, estatus FROM clientes WHERE estatus = 1 ORDER BY nombre_cliente ASC';
                            foreach ($PDO->query($client) as $cli1) {

                                $optin1 = '<option value="'.$cli1['id'].'" ';

                                if($cli1['id'] == trim($cliente)) {

                                $optin1 .= 'selected="selected"'; }

                                $optin1 .= '>'.utf8_encode($cli1['nombre_cliente']).'</option>';

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
                        <select class="form-control" required="required" id="inputSemana" name="semana" placeholder="semana">
                        <option></option>
                         <?php 
                           $seman= 'SELECT id, semana, year, estatus FROM semanas WHERE estatus = 1 ORDER BY id DESC';
                            foreach ($PDO->query($seman) as $wee1) {

                                $optin = '<option value="'.$wee1['id'].'" ';

                                if($wee1['id'] == trim($semana)) {

                                $optin .= 'selected="selected"'; }

                                $optin .= '>'.$wee1['semana'].'-'.$wee1['year'].'</option>';

                                echo $optin;

                            }
                            ?> 
                        </select>  
                    </div>
                    <div class="form-group">
                        <label for="inputImagen">Imagen</label>
                        <input type="text" class="form-control" required="required" id="inputImagen" name="imagen" placeholder="Nombre de la Imagen" value="<?php echo $imagen; ?>">
                    </div>
    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        <a class="btn btn btn-default" href="index.php">Regresar</a>
                    </div>
                </form>
                
    </div> <!-- /row -->
    </div> <!-- /container -->
</body>
</html>