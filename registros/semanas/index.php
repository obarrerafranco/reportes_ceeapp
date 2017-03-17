<?php
require "../../login/loginheader.php";
require '../db.php';
require '../PDO_Pagination.php';

$pagination = new PDO_Pagination($PDO);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link   href="../../css/bootstrap.min.css" rel="stylesheet">
    <script src="../../js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../img/plataforma/favicon.jpeg">
    <title>Semanas | JCdecaux</title>
</head>
 
<body>
<?php include('../menu.php'); ?>
<div class="container">
    <div class="row">
    <h3>Semanas CEE APP</h3>
    </div>
    <div class="row">
    <p><a class="btn btn-md btn-success" href="create.php">Nueva Semanas</a></p>
    <table class="table table-striped table-bordered table-hover">
    <tr>
        <th>ID</th>
        <th>Semana</th>
        <th>Color</th>
        <th>Scans</th>
        <th>Descargas</th>
        <th>Texto</th>
        <th>Estatus</th>
        <th>Accion</th>
    </tr>
    <tbody>
    <?php
   /* $search = null;
if(isset($_REQUEST["search"]) && $_REQUEST["search"] != "")
{
$search = htmlspecialchars($_REQUEST["search"]);
$pagination->param = "&search=$search";
$pagination->rowCount("SELECT * FROM products WHERE category LIKE '%$search%' OR description LIKE '%$search%' OR name LIKE '%$search%'");
$pagination->config(3, 5);
$sql = "SELECT * FROM products WHERE category LIKE '%$search%' OR description LIKE '%$search%' OR name LIKE '%$search%' ORDER BY id_product ASC LIMIT $pagination->start_row, $pagination->max_rows";
$query = $connection->prepare($sql);
$query->execute();
$model = array();
while($rows = $query->fetch())
{
    $model[] = $rows;
}
}
else
{*/
        $sqlpagina = 'SELECT wk.id as id, wk.semana as semana, wk.year as anno,wk.estatus as estatus,wk.color as color,wk.scans_total as scantt, wk.descarga_total as downlot,wk.text_semana as txtsem FROM semanas wk WHERE  wk.estatus = 1 ORDER BY wk.id DESC';
$pagination->rowCount($sqlpagina);
$pagination->config(10, 10);
$sql =  $sqlpagina." LIMIT $pagination->start_row, $pagination->max_rows";
$query = $PDO->prepare($sql);
$query->execute();
$model = array();
while($rows = $query->fetch())
{
    $model[] = $rows;
}
//}



    foreach ($model as $row) {
        echo '<tr>';
        echo '<td>'. $row['id'] . '</td>';
        echo '<td>'. $row['semana'] .'-'.$row['anno'] .'</td>';
        echo '<td>'. $row['color'] . '</td>';
        echo '<td>'. $row['scantt'] . '</td>';
        echo '<td>'. $row['downlot'] . '</td>';
        echo '<td>'. $row['txtsem'] . '</td>';
        echo '<td>'. $row['estatus'] . '</td>';
        echo '<td>
                  <a class="btn btn-xs btn-primary" href="update.php?id='. $row['id'] . '">Actualizar</a>
                    <button type="button" class="btn btn-primary btn-xs" data-id="'. $row['id'] . '" data-toggle="modal" onclick="mostrarGral('.$row['id'].')">General</button>
              </td>';
        echo '</tr>';
    }
$PDO = null;
    ?>
    </tbody>
    </table>
    <!-- Inicio Modal General-->
  <div class="modal fade" id="myModalGral" role="dialog">
    <div class="modal-dialog"-->
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Datos Gráfica General</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="fechasmld">Fechas separadas por coma</label>
            <input type="text" class="form-control"  id="fechasmld" name="fechasmld" placeholder="Fechas">
          </div>
          <div class="form-group">
            <label for="datosmdl">Datos separados por coma</label>
            <input type="text" class="form-control"  id="datosmdl" name="datosmdl" placeholder="Datos">
          </div>
          <input type="hidden" name="repir" id="repormdl">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" id="salva_general">Guardar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- Fin Modal General-->
    <div>
<?php
$pagination->pages("btn");
?>
</div>
    </div><!-- /row -->
</div><!-- /container -->

<script type="text/javascript">
$(document).ready(incia);

function incia(){
  $("#salva_general").click(savedataGral);
}

function mostrarGral (idr){
    $('#myModalGral').modal('show'); 

}
function savedataGral(){

  var irepor = $('#repormdl').val();
  var idfecha = $('#fechasmld').val();
  var idatos = $('#datosmdl').val();
  $.ajax({
    type: "POST",
    url: "http://localhost:8081/cee_report/registros/semanas/general.php?p=add",
    data: "repormdl="+irepor+"&fechasmld="+idfecha+"&datosmdl="+idatos,
    success: function(){$('#myModalGral').modal('toggle');}
  });
}
</body>
</html>