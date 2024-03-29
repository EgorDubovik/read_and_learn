<?php 
	include_once 'listModel.php';
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html>
<head>
	<title>Read and learn books</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="bode_index">
	<div class="items_book">
		<?php 
			foreach ($books as $key => $book):?>
		<a href='book.php?id=<?=$book['id']?>'><div class="one_item_book">
			<div class="title"><?=$book['title']?></div>
			<div class="book_level">Сложность: </div>
			<div class="cont_levels">
				<?php
					$level = $book['level'];
					$ar_class = ['c1','c1','c2','c2','c3'];
					for($i=0;$i<=4;$i++){
						echo '<div class="item_l '.$ar_class[$i].' '.(($i<$level) ? 'act' : '').'"></div>';
					}
				?>
			</div>
			<div class="clear"></div>
		</div></a>
		<?php endforeach; ?>
	</div>
</body>
</html>