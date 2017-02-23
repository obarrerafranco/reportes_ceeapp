<?php 
    require '../registros/db.php';
    	$idrepor = '2';
    	$sqlinfo = "select id, id_reporte, fechas_general, datos_general from graficas_general where id_reporte =?";
 		$stmt = $PDO->prepare($sqlinfo);
        $stmt->execute(array($idrepor));
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        $info = array();
			foreach ($data as $row) {
				$info[] = $row;
			}

	//now print the data
print json_encode($info);

?>