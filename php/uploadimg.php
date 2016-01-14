<? php
//Загрузка изображений на сервер, валидация.


$path_folder = $_POST['uploadDir'];  // путь к файлу
$maxVal = $_POST['maxSize'];       // размер файла
$maxWidth = $_POST['maxWidth'];     // ширина
$maxHeight = $_POST['maxHeight'];   // высота
$filename = basename($_FILES[0]["name"]); // имя файла
$session_dir = session_id() . "/"; // уникализированное имя директории для файлов юзера
$tmp_file = $_FILES[0]["tmp_name"];  // временный файл
$path_file = "../" . $path_folder . $session_dir . $filename; // путь и имя будущего файла
$path_url = $target_dir . $session_dir . $filename;          // url к будущему файлу


if (!file_exists("../" . $target_dir . $session_dir)) {
    mkdir("../" . $target_dir . $session_dir);
}

$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

$answer =  array();  // ответ от сервера
        $answer['status'] = 'OK';
        


echo json_encode($answer);


?>