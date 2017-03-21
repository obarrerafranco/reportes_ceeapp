<?php
		
	header('Content-type: application/json; charset=UTF-8');
		 
	require '../db.php';
	
	if (isset($_POST['id']) && !empty($_POST['id'])) {
			
		$id = intval($_POST['id']);
		$query = "SELECT * FROM reportes_clientes WHERE id=:id";
		$stmt = $PDO->prepare( $query );
		$stmt->execute(array(':id'=>$id));
		$row=$stmt->fetch(PDO::FETCH_ASSOC);						
		
		print json_encode($row);
		exit;
	}		