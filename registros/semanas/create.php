<?php 
require "../../login/loginheader.php";
require '../db.php';

    if ( !empty($_POST)) {
        
        $sema  = $_POST['sema'];
        $anno  = $_POST['anno'];
        $textw  = $_POST['textow'];
        $tscan  = $_POST['tscans'];
        $tdown  = $_POST['tdownlo'];
        $cold  = $_POST['cold'];
        
        // inserta data
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO semanas (semana,year,text_semana,scans_total,descarga_total,color) values(?, ?, ?, ?, ?, ?)";
            $stmt = $PDO->prepare($sql);
            $stmt->execute(array($sema,$anno,$textw,$tscan,$tdown,$cold));
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
    <title>Nueva Semana | JCdecaux</title>
</head>
 
<body>
<?php include('../menu.php'); ?>
<div class="container">

    <div class="row">
        <h3>Crear Nueva Semana</h3>
    </div>
            
    <form method="POST" action="">
        <div class="form-group">
            <label for="inputSemana">Semana</label>
            <div class="input-group">
                <select class="form-control" required="required" id="inputsema" name="sema" placeholder="sema">
                    <?php    for ($i=1; $i<=52; $i++) {
                           echo "<option value='$i'>$i</option>";
                        }  ?>
                </select>
                <span class="input-group-addon">-</span>
                <select class="form-control" required="required" id="inputanno" name="anno" placeholder="anno">
                    <option id='2017'>2017</option>
                    <option id='2018'>2018</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="inputTextw">Texto de la Semana</label>
            <input type="text" class="form-control"  id="inputTextw" name="textow" placeholder="Dia DE Mes AL Dia DE Mes" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="tscans">Total Scans</label>
            <input type="number" class="form-control"  id="tscans" name="tscans" placeholder="Total Scans" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="tdownlo">Total Descargas</label>
            <input type="number" class="form-control"  id="tdownlo" name="tdownlo" placeholder="Total Descargas" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="cold">Color</label>
            <select class="form-control" id="cold" name="cold" placeholder="cold">
                <option id='darkCyan'>darkCyan</option>
                <option id='skyBlue'>skyBlue</option>
                <option id='zombieGreen'>zombieGreen</option>
                <option id='violet'>violet</option>
                <option id='dodgerBlue'>dodgerBlue</option>
            </select>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-success">Crear</button>
            <a class="btn btn btn-default" href="index.php">Regresar</a>
        </div>
        <br />
    </form>
                
    </div> <!-- /container -->

    <!--script type="text/javascript" src="../../js/functions.js"></script-->

</body>
</html>