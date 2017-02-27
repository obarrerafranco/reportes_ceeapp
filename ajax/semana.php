<?php 
    require '../registros/db.php';
    	$idrepor = '2';
        $sqlinfo = $PDO->query('select  fechas_semana, scans_semana, views_semana from graficas_semana where id_reporte ='.$idrepor);
        foreach($sqlinfo as $row) {
                $fechas = array($row['fechas_semana']);
                $scans = array($row['scans_semana']);
                $views = array($row['views_semana']);
			}
        $seman['fecha'] = explode(',', $fechas[0]);
        $seman['scans'] = explode(',', $scans[0]);
        $seman['views'] = explode(',', $views[0]);

print json_encode($seman);

?>