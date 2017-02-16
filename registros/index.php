<?php
require "../login/loginheader.php";
require 'db.php';

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
    <h3>Historial de Reportes CEE APP</h3>
    </div>
    <div class="row">
    <p><a class="btn btn-xs btn-success" href="create.php">Crear</a></p>
    <table class="table table-striped table-bordered table-hover">
    <tr>
        <th>ID</th>
        <th>Semana</th>
        <th>Cliente</th>
        <th>Ciudad</th>
        <th>Estatus</th>
        <th>Accion</th>
    </tr>
    <tbody>
    <?php
    $sql = 'SELECT historial.id as idh, semanas.semana as lasemana,semanas.year as anno,
        clientes.nombre_cliente as nombre_cliente, ciudades.nombre_ciudad as nombre_ciudad,
        historial.estatus as estatush FROM historial 
        INNER JOIN semanas 
        ON historial.id_semana= semanas.id
        INNER JOIN clientes 
        ON historial.id_cliente = clientes.id
        INNER JOIN ciudades 
        ON historial.id_ciudad = ciudades.id
        WHERE historial.estatus = 1 ORDER BY historial.id DESC';
    foreach ($PDO->query($sql) as $row) {
        echo '<tr>';
        echo '<td>'. $row['idh'] . '</td>';
        echo '<td>'. $row['lasemana'] .'-'.$row['anno'] .'</td>';
        echo '<td>'. utf8_encode($row['nombre_cliente']) . '</td>';
        echo '<td>'. utf8_encode($row['nombre_ciudad']) . '</td>';
        echo '<td>'. $row['estatush'] . '</td>';
        echo '<td>
                  <a class="btn btn-xs btn-primary" href="update.php?id='. $row['idh'] . '">Actualizar</a>
              </td>';
        echo '</tr>';
    }
$PDO = null;
    ?>
    </tbody>
    </table>
    </div><!-- /row -->
</div><!-- /container -->
</body>
</html>