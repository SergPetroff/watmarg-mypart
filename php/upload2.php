<?php
	$target_dir = "img/upload/";
	$maxSize = 1000000;
	$maxWidth = $_POST['maxWidth'];     // ширина контейнера для картинки
	$maxHeight = $_POST['maxHeight'];   // высота контейнера для картинки
	$filename = basename($_FILES[0]["name"]); // имя файла
	$session_dir = session_id() . "/"; // уникализированное имя директории для файлов юзера
	$tmp_file = $_FILES[0]["tmp_name"];  // временный файл
	$target_file = "../" . $target_dir . $filename; // путь и имя будущего файла
	$target_url = $target_dir . $filename;          // url к будущему файлу
?>