<?php
	include_once 'DB.php';
	$db = DB::getConection();
	$row = $db->query("SELECT id,title,level FROM books ORDER BY id DESC");
	$books = $row->fetchAll();
?>