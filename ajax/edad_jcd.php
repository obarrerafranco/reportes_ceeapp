<?php 
    require '../registros/db.php';
    	$idrepor = $_GET['id_reporte'];
        $sqlinfo = $PDO->query('select  datos_edad from graficas_edad_jcd where id_reporte ='.$idrepor);
        foreach($sqlinfo as $row) {
                $datos = array($row['datos_edad']);
			}
        $edad['datos'] = explode(',', $datos[0]);

print json_encode($edad);

?>