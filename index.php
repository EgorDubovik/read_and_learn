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
		<a href='book.php?id=1'><div class="one_item_book">
			<div class="title">Title same book</div>
			<div class="book_level">Сложность: </div>
			<div class="cont_levels">
				<?php
					$level = 5;
					$ar_class = ['c1','c1','c2','c2','c3'];
					for($i=0;$i<=4;$i++){
						echo '<div class="item_l '.$ar_class[$i].' '.(($i<$level) ? 'act' : '').'"></div>';
					}
				?>
			</div>
			<div class="clear"></div>
		</div></a>
	</div>
</body>
</html>