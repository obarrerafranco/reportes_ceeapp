<?php 
    require '../registros/db.php';
    	$idrepor = $_GET['id_reporte'];
        $sqlinfo = $PDO->query('select  datos_generos from graficas_genero_jcd where id_reporte ='.$idrepor);
        foreach($sqlinfo as $row) {
                $datos = array($row['datos_generos']);
			}
        $gene['datos'] = explode(',', $datos[0]);

print json_encode($gene);

?>