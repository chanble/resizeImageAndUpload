<?php
var_dump($_FILES);
if (!empty($_FILES)) {
    foreach ($_FILES as $key => $file) {
        move_uploaded_file($file['tmp_name'], 'upload' . DIRECTORY_SEPARATOR . $file['name']);
    }
}
