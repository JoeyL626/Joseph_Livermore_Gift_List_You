<?php
/*
* Author : Ali Aboussebaba
* URL : http://www.http://www.bewebdeveloper.com/tutorial-about-dynamic-drag-and-drop-with-jquery-and-php
*/

// including the config file
include('../config.php');
$pdo = connect();

// get the list of items id separated by cama (,)
$list_order = $_POST['list_order'];
// convert the string list to an array
$list = explode(',' , $list_order);
$i = 1 ;
foreach($list as $id) {
	try {
	    $sql  = 'UPDATE items SET items.order = :item_order WHERE item_id = :id' ;
		$query = $pdo->prepare($sql);
		$query->bindParam(':item_order', $i, PDO::PARAM_INT);
		$query->bindParam(':id', $id, PDO::PARAM_INT);
		$query->execute();
	} catch (PDOException $e) {
		echo 'PDOException : '.  $e->getMessage();
	}
	$i++ ;
}
?>
