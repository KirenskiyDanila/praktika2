<?php
require("vendor/autoload.php");
use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();


$file = $request->files->get('image');
echo $file;
$name = $request->request->get('name');
echo $name;

$uploadDir = "upload/";
$uploadfile = $uploadDir . basename($name);

if ($file->move($uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}