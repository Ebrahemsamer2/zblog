<?php 


function search_posts($s) {

	include "connect.php";
	$sql = "SELECT * FROM posts WHERE title LIKE '%$s%' OR content LIKE '%$s%' OR datetime LIKE '%$s%' OR category LIKE '%$s%' ";
	try {
		$result = $con->prepare($sql);
		$result->execute();
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}
	catch(Exception $e) {
		echo "Error: ".$e->getMessage();
		return false;
	}
}

function get_home_posts($from, $to) {
	include "connect.php";
	$sql = "SELECT * FROM posts ORDER BY datetime DESC LIMIT $from, $to";
	try {
		$result = $con->prepare($sql);
		$result->execute();
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}
	catch(Exception $e) {
		echo "Error: ".$e->getMessage();
		return array();
	}
}

?>