<?php

//print "Received {$_FILES['userfile']['name']} - its size is {$_FILES['userfile']['size']}";

//print "Вывод:" . $_FILES['userfile']['tmp_name'];
print_r($_FILES); 
echo "</pre>"; 
$uploaddir = '/var/www/uploads/';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], "../img/" . $_FILES['userfile']['name'])) {
    print "File is valid, and was successfully uploaded.";
} else {
    print "There some errors!";
}
?>
