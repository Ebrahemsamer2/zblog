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

function add_comment($datetime, $username, $email, $comment_comment, $post_id, $approve) {
	$fields = array($datetime, $username, $email, $comment_comment);
	include "connect.php";
	$sql = "INSERT INTO comments (datetime, commenter_name, commenter_email, comment, post_id, approve) VALUES (?,?,?,?,?,?) ";

	try{
		$result = $con->prepare($sql);
		for($i = 1; $i <= 4; $i++){
			$result->bindValue($i, $fields[$i - 1], PDO::PARAM_STR);
		}
		$result->bindValue(5, $post_id, PDO::PARAM_INT);
		$result->bindValue(1, $approve, PDO::PARAM_INT);
		return $result->execute();
	}catch(Exception $e) {
		echo "Error: ". $e->getMessage();
		return false;
	}
}

function get_posts_by_category($cat_name) {
	include "connect.php";
	$sql = "SELECT * FROM posts WHERE category = ? ";
	try {
		$result = $con->prepare($sql);
		$result->bindValue(1,$cat_name,PDO::PARAM_STR);
		$result->execute();
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}
	catch(Exception $e) {
		echo "Error: ".$e->getMessage();
		return false;
	}
}

function get_posts_by_author($author) {
	include "connect.php";
	$sql = "SELECT * FROM posts WHERE author = ? ";
	try {
		$result = $con->prepare($sql);
		$result->bindValue(1,$author,PDO::PARAM_STR);
		$result->execute();
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}
	catch(Exception $e) {
		echo "Error: ".$e->getMessage();
		return false;
	}
}
function add_user($username, $email, $hashed_password) {
	include "connect.php";
	$sql = "INSERT INTO users (username, email, password) VALUES (?,?,?) ";
	try {
		$result = $con->prepare($sql);
		$result->bindValue(1, $username, PDO::PARAM_STR);
		$result->bindValue(2, $email, PDO::PARAM_STR);
		$result->bindValue(3, $hashed_password, PDO::PARAM_STR);
		return $result->execute();
	}
	catch(Exception $e) {
		echo "Error: " . $e->getMessage();
		return false;
	}
}

function is_user($email) {
	include "connect.php";
	$sql = "SELECT * FROM users WHERE email = ? ";
	try {
		$result = $con->prepare($sql);
		$result->bindValue(1, $email, PDO::PARAM_STR);
		$result->execute();
		return $result->fetch(PDO::FETCH_ASSOC);
	}
	catch(Exception $e) {
		echo "Error: ". $e->getMessage();
		return false;
	}
}

?>