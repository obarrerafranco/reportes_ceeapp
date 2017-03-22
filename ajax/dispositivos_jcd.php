<?php 
    require '../registros/db.php';
    	$idrepor = $_GET['id_reporte'];
        $sqlinfo = $PDO->query('select  datos_dispositivos from graficas_dispositivo_jcd where id_reporte ='.$idrepor);
        foreach($sqlinfo as $row) {
                $datos = array($row['datos_dispositivos']);
			}
        $gene['datos'] = explode(',', $datos[0]);

print json_encode($gene);

?>