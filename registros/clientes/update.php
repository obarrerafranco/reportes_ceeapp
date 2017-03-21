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
       $cliente  = $_POST['cliente'];
       $logo  = $_POST['logo'];
        $letra  = $_POST['letra'];
        
        // update data
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "Update clientes set nombre_cliente=?,logo=?,letra=? where id=?";
            $stmt = $PDO->prepare($sql);
            $stmt->execute(array($cliente,$logo,$letra,$id));
            $PDO = null;
            header("Location: index.php");
    }
    else{
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM clientes where id = ?";
        $stmt = $PDO->prepare($sql);
        $stmt->execute(array($id));
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
       //$PDO = null;
        if (empty($data)){
            header("Location: index.php");
        }
        $cliente  = $data['nombre_cliente'];
        $logo  = $data['logo'];
        $letra1  = $data['letra'];
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
                            <label for="inputCliente">Nombre del Cliente</label>
                            <input type="text" class="form-control" required="required" id="inputCliente" name="cliente" value="<?php echo $cliente; ?>" autocomplete="off">
                        </div>
                            <div class="form-group">
                                <label for="inputLetra">Letra</label>
                                <select class="form-control" required="required" id="inputLetra" name="letra" placeholder="Letra">
                               <?php for($i=65; $i<=90; $i++) {  
                                    $letra = chr($i);  
                                    $lea = '<option id='.$letra;
                                
                                    if($letra == trim($letra1)) {
                                        $lea.= ' selected="selected"';
                                    }
                                    $lea.='">'.$letra.'</option>';  
                                
                                echo $lea;
                                }   ?>
                                </select>
                                
                            </div>
                        <div class="form-group">
                            <label for="inputLogo">Logo</label>
                            <input type="text" class="form-control" id="inputLogo" name="logo" value="<?php echo $logo; ?>" autocomplete="off">
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