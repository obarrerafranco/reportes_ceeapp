<?php 
    require '../registros/db.php';

    	$idrepor = $_GET['id_reporte'];
   
       	$sqlinfo = $PDO->query('select fechas_general, datos_general from graficas_general where id_semana ='.$idrepor);

        foreach($sqlinfo as $row) {
				$fech = array($row['fechas_general']);
                $datos = array($row['datos_general']);
			}
        $info2['fechas'] = explode(',',  $fech[0]);
        $info2['datos'] = explode(',', $datos[0]);
print json_encode($info2);

?>