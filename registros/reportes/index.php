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
    <h3>Reportes CEE APP</h3>
    </div>
    <div class="row">
    <p><a class="btn btn-md btn-success" href="create.php">Nuevo Reporte</a></p>
    <table class="table table-striped table-bordered table-hover">
    <tr>
        <th>ID</th>
        <th>Cliente</th>
        <th>Campaña</th>
        <th>Ciudad</th>
        <th>Semana</th>
        <th># Scans</th>
        <th># Views</th>
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
        $sqlpagina = 'SELECT rc.id as id_repor, 
rc.id_campana, 
rc.id_ciudad, 
rc.id_semana, 
text_semana,
no_scans, 
no_views, 
best_hour,
CONCAT_WS("/",semanas.semana,semanas.year) as semana,
cy.nombre_ciudad,
cp.nombre_campana,
cp.id_cliente,
cp.img_header,
cl.nombre_cliente
FROM reportes_clientes rc
INNER JOIN semanas 
     ON rc.id_semana = semanas.id
INNER JOIN ciudades cy 
     ON rc.id_ciudad  = cy.id
INNER JOIN campanas cp 
     ON rc.id_campana  = cp.id
INNER JOIN clientes cl 
     ON cp.id_cliente  = cl.id ORDER BY id_repor DESC';
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
        echo '<td>'. $row['nombre_cliente'] .'</td>';
        echo '<td>'. $row['nombre_campana'] . '</td>';
        echo '<td>'. $row['nombre_ciudad'] . '</td>';
        echo '<td>'. $row['semana'] . '</td>';
        echo '<td>'. $row['no_scans'] . '</td>';
        echo '<td>'. $row['no_views'] . '</td>';
        echo '<td>
                  <a class="btn btn-xs btn-primary" href="update.php?id='. $row['id_repor'] . '">Editar</a>
                   <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalGral">General</button>
                   <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalSem">Semana</button>
                   <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalGenero">Genero</button>
                   <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalEdad">Edad</button>
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
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Gráfica General</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
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
          <h4 class="modal-title">Gráfica Semana</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
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
          <h4 class="modal-title">Gráfica Genero</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
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
          <h4 class="modal-title">Gráfica Edad</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- Fin Modal Edad-->
</body>
</html>