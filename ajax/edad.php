<?php 
    require '../registros/db.php';
    	$idrepor = '2';
        $sqlinfo = $PDO->query('select  datos_edad from graficas_edad where id_reporte ='.$idrepor);
        foreach($sqlinfo as $row) {
                $datos = array($row['datos_edad']);
			}
        $edad['datos'] = explode(',', $datos[0]);

print json_encode($edad);

?>