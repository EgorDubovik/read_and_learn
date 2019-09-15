<?php
	include_once 'DB.php';
	$db = DB::getConection();
	$row = $db->query("SELECT id,title,level FROM books");
	$books = $row->fetchAll();
?>