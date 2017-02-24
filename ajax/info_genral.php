<?php 
    require '../registros/db.php';
    	$idrepor = '2';
    	/*$sqlinfo = "select fechas_general, datos_general from graficas_general where id_reporte =?";
 		$stmt = $PDO->prepare($sqlinfo);
        $data->execute(array($idrepor));
        */
        //$info2 = array();
        $sqlinfo = $PDO->query('select fechas_general, datos_general from graficas_general where id_reporte =2');
        foreach($sqlinfo as $row) {
				 $info2 = array( 'fechas_general' => $row['fechas_general'], 'datos_general' => $row['datos_general']);
			}

	//now print the data
print json_encode($info2);

?>