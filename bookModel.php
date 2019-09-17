<?php
	include_once 'DB.php';
	$db = DB::getConection();

	$id = (isset($_GET['id']) && is_numeric($_GET['id'])) ? $_GET['id'] : 1;

	$i = $db->query("SELECT * FROM books WHERE id =".$id." LIMIT 1");
	if(!$book = $i->fetch()){
		header("Location: /");
	} else {
		$regex = "((?!br|Br|BR)[\w]{2,})";
		$result = preg_replace($regex, '<span class="word">$0</span>', $book['text']);
		$book['text'] = $result;
	}

?>