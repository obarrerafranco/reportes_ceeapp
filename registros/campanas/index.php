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
    <link   href="../../css/bootstrap.min.css" rel="stylesheet">
    <script src="../../js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../img/plataforma/favicon.jpeg">
    <title>Campañas | JCdecaux</title>
</head>
 
<body>
<div class="container">
    <div class="row">
    <h3>Campañas CEE APP</h3>
    </div>
    <div class="row">
    <p><a class="btn btn-md btn-success" href="create.php">Nuevo Cliente</a></p>
    <table class="table table-striped table-bordered table-hover">
    <tr>
        <th>ID</th>
        <th>Nombre Campaña</th>
        <th>Cliente</th>
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
        $sqlpagina = 'SELECT cp.id, nombre_campana, cp.id_cliente, cl.nombre_cliente as cliente, cp.status, img_header FROM campanas cp INNER JOIN clientes cl ON cl.id = cp.id_cliente
        WHERE status = 1 ORDER BY id DESC';
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
        echo '<td>'. $row['nombre_campana'] .'</td>';
        echo '<td>'. $row['cliente'] . '</td>';
        echo '<td>'. $row['status'] . '</td>';
        echo '<td>
                  <a class="btn btn-xs btn-primary" href="update.php?id='. $row['id'] . '">Actualizar</a>
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
</body>
</html>