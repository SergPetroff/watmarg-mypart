<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>

	</title>
</head>
<body>
		<form action="php/watermark.php" method="post">
		 <p>Картинка: <input type="file" name="main" value="" /></p>
 		<p>водяной знак: <input type="file" name="watmark" value="" /></p>		
		</form>

		<div class="imgbox" style="width:500px; height:500px">
			<img src="img/result.png" alt="" style="width:100%">
		</div>
		<?php
/*				use PHPImageWorkshop\ImageWorkshop;
		require_once('php/PHPImageWorkshop/ImageWorkshop.php');


		$pinguLayer = ImageWorkshop::initFromPath(__DIR__.'/img/main/ITman.jpg');
		echo $pinguLayer->getWidth().'<br>' ;
		echo $pinguLayer->getHeight();*/
			include "php/watermark.php";
		?>
</html>