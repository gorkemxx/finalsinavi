<?php

require("baglan.php");

	$query = $db->prepare("DELETE FROM veri2 WHERE id = :id");
	$delete = $query->execute(array(
		'id' => $_GET['id']
	));
	if($delete){
		echo "veriler silindi";
		header("Location: siralama.php");
	}else{
		echo "hata";
	}
?>