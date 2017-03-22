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
    <title>Clientes | JCdecaux</title>
</head>
 
<body>
<?php include('../menu.php'); ?>
<div class="container">
    <div class="row">
    <h3>Reportes Generales JCDecaux CEE APP</h3>
    </div>
    <div class="row">
    <p><a class="btn btn-md btn-success" href="create.php">Nuevo Reporte</a></p>
    <table class="table table-striped table-bordered table-hover">
    <tr>
        <th>ID</th>
        <th>Ciudad</th>
        <th>Semana</th>
        <th>Scans Semana</th>
        <th>Views Semana</th>
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
        $sqlpagina = 'SELECT
rc.id AS id_repor,
rc.id_ciudad,
rc.id_semana,
CONCAT_WS("/",semanas.semana,semanas.year) AS semana,
cy.nombre_ciudad as ciudad,
rc.scans_total_semana as scans_sema,
rc.scans_promedio_diario,
rc.views_total_semana as views_sema,
rc.views_promedio_diario,
rc.views_total_year,
rc.download_android,
rc.download_ios,
rc.download_windows,
rc.mapa_ciudad
FROM
reportes_jcdecaux AS rc
INNER JOIN semanas ON rc.id_semana = semanas.id
INNER JOIN ciudades AS cy ON rc.id_ciudad = cy.id
ORDER BY id_repor DESC';
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
        echo '<td>'. $row['id_repor'] . '</td>';
        echo '<td>'. $row['ciudad'] . '</td>';
        echo '<td>'. $row['semana'] . '</td>';
        echo '<td>'. $row['scans_sema'] . '</td>';
        echo '<td>'. $row['views_sema'] . '</td>';
        echo '<td>
                  <a class="btn btn-xs btn-primary" href="update.php?id='. $row['id_repor'] . '">Editar</a>
                   <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-id="'. $row['id_repor'] . '" onclick="mostrarWkk('.$row['id_repor'].')">Semana</button>
                   <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-id="'. $row['id_repor'] . '" onclick="mostrarGnr('.$row['id_repor'].')">Genero</button>
                   <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-id="'. $row['id_repor'] . '" onclick="mostrarAge('.$row['id_repor'].')">Edad</button>
                  <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-id="'. $row['id_repor'] . '" onclick="mostrarDisp('.$row['id_repor'].')">Dispositivo</button>
              </td>';
        echo '</tr>';
    }
$PDO = null;
    ?>
    </tbody>
    </table>
    <div>
<?php
$pagination->pages("btn");
?>
</div>
    </div><!-- /row -->
</div><!-- /container -->
<!-- Inicio Modal General-->
  <div class="modal fade" id="myModalGral" role="dialog">
    <div class="modal-dialog"-->
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Datos Gráfica General JCDecaux</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="fechasmld">Fechas separadas por coma</label>
            <input type="text" class="form-control"  id="fechasmld" name="fechasmld" placeholder="Fechas" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="datosmdl">Datos separados por coma</label>
            <input type="text" class="form-control"  id="datosmdl" name="datosmdl" placeholder="Datos">
          </div autocomplete="off">
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
<!-- Inicio Modal Semana-->
  <div class="modal fade" id="myModalSem" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Datos Gráfica Semana JCDecaux</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="fechasmld2">Fechas separadas por coma</label>
            <input type="text" class="form-control"  id="fechasmld2" name="fechasmld2" placeholder="Fechas" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="scansmdl">Scans separados por coma</label>
            <input type="text" class="form-control"  id="scansmdl" name="scansmdl" placeholder="Scans" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="viewsmdl">Views separados por coma</label>
            <input type="text" class="form-control"  id="viewsmdl" name="viewsmdl" placeholder="Views" autocomplete="off">
          </div>
          <input type="hidden" name="repir2" id="repormd2">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" id="salva_semana">Guardar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- Fin Modal Semana-->
<!-- Inicio Modal Genero-->
  <div class="modal fade" id="myModalGenero" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Datos Gráfica Genero JCDecaux</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="datosmdl3">Datos separados por coma</label>
            <input type="text" class="form-control"  id="datosmdl3" name="datosmdl3" placeholder="Femenino,Masculino" autocomplete="off">
          </div>
          <input type="hidden" name="repir3" id="repormdl3">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" id="salva_genero">Guardar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- Fin Modal Genero-->
<!-- Inicio Modal Edad-->
  <div class="modal fade" id="myModalEdad" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Datos Gráfica Edad JCDecaux</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="datosmdl4">Datos separados por coma</label>
            <input type="text" class="form-control"  id="datosmdl4" name="datosmdl4" placeholder="10-19,20-29,30-39,40-60" autocomplete="off">
          </div>
          <input type="hidden" name="repir4" id="repormdl4">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" id="salva_edad">Guardar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- Fin Modal Edad-->
<!-- Inicio Modal Edad-->
  <div class="modal fade" id="myModalDispositv" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Datos Gráfica Dispositivo JCDecaux</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="datosdisp">Datos separados por coma</label>
            <input type="text" class="form-control"  id="datosdisp" name="datosdisp" placeholder="Android, IOS, Windows" autocomplete="off">
          </div>
          <input type="hidden" name="repirdis4" id="repordismdl4">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" id="salva_disp">Guardar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- Fin Modal Edad-->
<script type="text/javascript">
$(document).ready(incia);

function incia(){
  $("#salva_semana").click(savedataWkk);
  $("#salva_genero").click(savedataGnr);
  $("#salva_edad").click(savedataAge);
  $("#salva_disp").click(savedataDisp);
}

function mostrarWkk (idr2){
    $('#myModalSem').modal('show'); 
    $('#repormd2').val(idr2);
    $('#fechasmld2').val("");
    $('#scansmdl').val("");
    $('#viewsmdl').val("");

}
function mostrarGnr (idr3){
    $('#myModalGenero').modal('show'); 
    $('#repormdl3').val(idr3);
    $('#datosmdl3').val("");

}
function mostrarAge (idr4){
    $('#myModalEdad').modal('show'); 
    $('#repormdl4').val(idr4);
    $('#datosmdl4').val("");

}
function mostrarDisp (idr5){
    $('#myModalDispositv').modal('show'); 
    $('#repordismdl4').val(idr5);
    $('#datosdisp').val("");

}
function savedataWkk(){

  var irepor2 = $('#repormd2').val();
  var idfecha2 = $('#fechasmld2').val();
  var iscans = $('#scansmdl').val();
  var iviews = $('#viewsmdl').val();
  $.ajax({
    type: "POST",
    url: "http://localhost:8081/cee_report/registros/reportesjcd/semana.php?p=add",
    data: "repormd2="+irepor2+"&fechasmld2="+idfecha2+"&scansmdl="+iscans+"&viewsmdl="+iviews,
    success: function(){$('#myModalSem').modal('toggle');}
  });
}
function savedataGnr(){

  var irepor3 = $('#repormdl3').val();
  var idatos3 = $('#datosmdl3').val();
  $.ajax({
    type: "POST",
    url: "http://localhost:8081/cee_report/registros/reportesjcd/genero.php?p=add",
    data: "repormdl3="+irepor3+"&datosmdl3="+idatos3,
    success: function(){$('#myModalGenero').modal('toggle');}
  });
}
function savedataAge(){

  var irepor4 = $('#repormdl4').val();
  var idatos4 = $('#datosmdl4').val();
  $.ajax({
    type: "POST",
    url: "http://localhost:8081/cee_report/registros/reportesjcd/edad.php?p=add",
    data: "repormdl4="+irepor4+"&datosmdl4="+idatos4,
    success: function(){$('#myModalEdad').modal('toggle');}
  });
}
function savedataDisp(){

  var irepor5 = $('#repordismdl4').val();
  var idatos5 = $('#datosdisp').val();
  $.ajax({
    type: "POST",
    url: "http://localhost:8081/cee_report/registros/reportesjcd/dispositivos.php?p=add",
    data: "repordismdl4="+irepor5+"&datosdisp="+idatos5,
    success: function(){$('#myModalDispositv').modal('toggle');}
  });
}
</script>
</body>
</html>