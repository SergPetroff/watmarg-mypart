<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>

	</title>
</head>
<body>
		<form enctype="multipart/form-data" action="/php/test.php" method="post">
		<input type="hidden" name="MAX_FILE_SIZE" value="3000000">
		Send this file: <input name="userfile" type="file">
		<input type="submit" value="Send File">
		</form>


		<?php
/*				use PHPImageWorkshop\ImageWorkshop;
		require_once('php/PHPImageWorkshop/ImageWorkshop.php');


		$pinguLayer = ImageWorkshop::initFromPath(__DIR__.'/img/main/ITman.jpg');
		echo $pinguLayer->getWidth().'<br>' ;
		echo $pinguLayer->getHeight();*/
			//include "php/watermark.php";
		?>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
</html>