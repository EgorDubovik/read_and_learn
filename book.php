<?php include_once 'bookModel.php';?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html>
<head>
	<title>Read and learn books</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="top_on_book">
		<a href="index.php"><div class="go_back">back</div></a>
		<div class="title_book"><?=$book['title']?></div>
	</div>
	<div class="cont_text">
		<?=$book['text']?>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			add_text_to_page($('.cont_text'));
		});
	</script>
<div id="popup" style="display: none;">

	<div class="information_c">
		<div class="general_w"></div>
		<div class="translate_w"></div>
	</div>
	<div class="cont_svg">
		<svg width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
			<circle cx="50" cy="50" fill="none" stroke="#71c2cc" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(4.22856 50 50)">
				<animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform>
			</circle>
		</svg>
	</div>
</div>
<div class="close_popup"></div>
</body>
</html>