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

        $semana  = $_POST['sema'];
        $year  = $_POST['anno'];
        $text_semana  = $_POST['textow'];
        $scans_total  = $_POST['tscans'];
        $descarga_total  = $_POST['tdownlo'];
        $color  = $_POST['cold'];

        // update data
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "Update semanas set semana=?,year=?,text_semana=?,scans_total=?,descarga_total=?,color=? where id=?";
            $stmt = $PDO->prepare($sql);
            $stmt->execute(array($semana,$year,$text_semana,$scans_total,$descarga_total,$color,$id));
            $PDO = null;
            header("Location: index.php");
    }
    else{
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM semanas where id = ?";
        $stmt = $PDO->prepare($sql);
        $stmt->execute(array($id));
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
       //$PDO = null;
        if (empty($data)){
            header("Location: index.php");
        }
        $semana  = $data['semana'];
        $year  = $data['year'];
        $text_semana  = $data['text_semana'];
        $scans_total  = $data['scans_total'];
        $descarga_total  = $data['descarga_total'];
        $color  = $data['color'];
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
                        <h3>Actualizar Semana</h3>
                    </div>
            
                    <form method="POST" action="update.php?id=<?php echo $id?>">
                        <div class="form-group">
                            <label for="inputSemana">Semana</label>
                            <div class="input-group">
                                <select class="form-control" required="required" id="inputsema" name="sema" placeholder="sema">
                                <?php for($i=1; $i<=52; $i++){  
         
                                    $sem = '<option id='.$i;
                                
                                    if($semana == $i) {
                                        $sem.= ' selected="selected"';
                                    }
                                    $sem.='">'.$i.'</option>';  
                                
                                echo $sem;
                                }    ?>
                                </select>
                                <span class="input-group-addon">-</span>
                                <select class="form-control" required="required" id="inputanno" name="anno" placeholder="anno">
                                <?php  

                                    if($year == '2017') {
                                        $yea= ' selected="selected"';
                                    }else{
                                        $yea1= ' selected="selected"';
                                    }
                                     
                                echo '<option id="2017"'.$yea.'>2017</option>'; 
                                echo '<option id="2018"'.$yea1.'>2018</option>'; 
                               ?>
                               </select>
                             </div>
                        </div>
                        <div class="form-group">
                            <label for="inputTextw">Texto de la Semana</label>
                            <input type="text" class="form-control"  id="inputTextw" name="textow" placeholder="Dia DE Mes AL Dia DE Mes" value="<?php echo $text_semana; ?>" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="tscans">Total Scans</label>
                            <input type="number" class="form-control"  id="tscans" name="tscans" placeholder="Total Scans" value="<?php echo $scans_total; ?>" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="tdownlo">Total Descargas</label>
                            <input type="number" class="form-control"  id="tdownlo" name="tdownlo" placeholder="Total Descargas" value="<?php echo $descarga_total; ?>" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="cold">Color</label>
                            <select class="form-control" id="cold" name="cold" placeholder="cold">
                                <?php $va1=$va2=$va3=$va4=$va5= "";
                            switch ($color) {
                                case 'darkCyan':
                                    $va1 = 'selected="selected"';
                                    break;
                                case 'skyBlue':
                                    $va2 = 'selected="selected"';
                                    break;
                                case 'zombieGreen':
                                    $va3 = 'selected="selected"';
                                    break;
                                case 'violet':
                                    $va4 = 'selected="selected"';
                                    break;
                                case 'dodgerBlue':
                                    $va5 = 'selected="selected"';
                                    break;
                            }
                            ?>
                                <option id='darkCyan' <?php echo $va1; ?> >darkCyan</option>
                                <option id='skyBlue' <?php echo $va2; ?>>skyBlue</option>
                                <option id='zombieGreen' <?php echo $va3; ?>>zombieGreen</option>
                                <option id='violet' <?php echo $va4; ?>>violet</option>
                                <option id='dodgerBlue' <?php echo $va5; ?>>dodgerBlue</option>
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