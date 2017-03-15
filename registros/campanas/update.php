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
        $campana  = $_POST['campana'];
        $header  = $_POST['header'];
        $cliente  = $_POST['cliente'];
        
        // update data
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "Update campanas set nombre_campana=?,id_cliente=?,img_header=? where id=?";
            $stmt = $PDO->prepare($sql);
            $stmt->execute(array($campana,$cliente,$header,$id));
            $PDO = null;
            header("Location: index.php");
    }
    else{
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM campanas where id = ?";
        $stmt = $PDO->prepare($sql);
        $stmt->execute(array($id));
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
       //$PDO = null;
        if (empty($data)){
            header("Location: index.php");
        }
        $campana  = $data['nombre_campana'];
        $header  = $data['img_header'];
        $clientes  = $data['id_cliente'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="../../css/bootstrap.min.css" rel="stylesheet">
    <script src="../../js/bootstrap.min.js"></script>
</head>
 
<body>
<?php include('../menu.php'); ?>
<div class="container">
    
                    <div class="row">
                    <div class="row">
                        <h3>Actualizar Campaña</h3>
                    </div>
            
                    <form method="POST" action="update.php?id=<?php echo $id?>">
                        <div class="form-group">
                            <label for="inputCampana">Nombre de la Campaña</label>
                            <input type="text" class="form-control" required="required" id="inputCampana" name="campana" value="<?php echo $campana; ?>" maxlength="25">
                        </div>
                         <div class="form-group">
                        <label for="inputCliente">Cliente</label>
                        <select class="form-control" required="required" id="inputCliente" name="cliente" placeholder="Cliente">
                        <?php 
                            $client = 'SELECT id, nombre_cliente, estatus FROM clientes WHERE estatus = 1 ORDER BY nombre_cliente ASC';
                            foreach ($PDO->query($client) as $cli1) {

                                $optin1 = '<option value="'.$cli1['id'].'" ';

                                if($cli1['id'] == trim($clientes)) {

                                $optin1 .= 'selected="selected"'; }

                                $optin1 .= '>'.utf8_encode($cli1['nombre_cliente']).'</option>';

                                echo $optin1;

                            }
                            ?> 
                        </select>
                        
                    </div>
                        <div class="form-group">
                            <label for="inputHeader">Logo</label>
                            <input type="text" class="form-control" id="inputHeader" name="header" value="<?php echo $header; ?>">
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