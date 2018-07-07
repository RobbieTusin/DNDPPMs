<?php

$id = $_POST['id'];
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];

try {
 	require "db.php";
} catch(Exception $e) {
	exit('Unable to connect to database.');
}

$sql = "UPDATE calendar SET title=?, start=?, end=? WHERE id=?";
$q = $connection->prepare($sql);
$q->execute(array($title,$start,$end,$id));

?>