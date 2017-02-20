<?php
require "../login/loginheader.php";
require 'db.php';

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
        // validation errors

        $cliente  = null;
        $ciudad  = null;
        $semana    = null;
        $imagen = null;

        
        // post values
       $cliente  = $_POST['cliente'];
        $ciudad  = $_POST['ciudad'];
        $semana    = $_POST['semana'];
        $imagen = $_POST['imagen'];
        
        // update data
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "Update historial set id_cliente=?,id_ciudad=?,id_semana=?,imagen=? where id=?";
            $stmt = $PDO->prepare($sql);
            $stmt->execute(array($cliente,$ciudad,$semana,$imagen));
            $PDO = null;
            header("Location: index.php");
    }
    else{
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM historial where id = ?";
        $stmt = $PDO->prepare($sql);
        $stmt->execute(array($id));
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $PDO = null;
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
    <link   href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
</head>
 
<body>
<div class="container">
    
                    <div class="row">
                    <div class="row">
                        <h3>Actualizar Historial</h3>
                    </div>
            
                    <form method="POST" action="update.php?id=<?php echo $id?>">
                        <div class="form-group">
                                <label for="inputGender">Cliente</label>
                                <select class="form-control" required="required" id="inputCliente" name="cliente" placeholder="Cliente">
                                <option></option>
                                <?php 
                                   $client = 'SELECT id, nombre_cliente, estatus FROM clientes WHERE estatus = 1 ORDER BY nombre_cliente ASC';

                                    foreach ($stmt->query($client) as $cli1) {

                                        echo '<option value="'.$cli1['id'].'">'.utf8_encode($cli1['nombre_cliente']).'</option>';

                                    }
                                    ?>

                                </select>
                                
                            </div>
    <div class="form-group >">
        <label for="inputLName">Apellido</label>
        <input type="text" class="form-control" required="required" id="inputLName" value="<?php echo !empty($ciudad)?$ciudad:'';?>" name="lname" placeholder="Apellido">
    </div>
    <div class="form-group ">
        <label for="inputAge">Edad</label>
        <input type="number" required="required" class="form-control" id="inputAge" value="<?php echo !empty($age)?$age:'';?>" name="age" placeholder="Edad">
    </div>
    <div class="form-group ">
        <label for="inputGender">Genero</label>
        <select class="form-control" required="required" id="inputGender" name="gender" >
        <option></option>
        <?php 
                $masc = '';
                $femin = '';
                if($gender == 'masculino')
                    { $masc = 'selected'; }
                else{ $femin = 'selected';} 
        ?>
        <option value="masculino" <?php echo $masc; ?> >Masculino</option>
        <option value="femenino" <?php echo $femin; ?> >Femenino</option>
        </select>
        
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