<?php
	include_once 'DB.php';
	$db = DB::getConection();
	if(isset($_POST['title'])){
		$db->query("INSERT INTO books (title,level,text) VALUES('".$_POST['title']."',".$_POST['level'].",'".$_POST['text']."')");
		print_r($db->errorInfo());
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="/">home</a>
	<form method="post">
		Title: <input type="text" name="title"><br><br>
		Level: <input type="type" name="level" value="1"><br><br>
		<textarea name="text" style="width: 300px; height: 250px"></textarea>
		<br><br><button type="submit">submit</button>
	</form>
</body>
</html>