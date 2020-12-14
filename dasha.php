<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Catalog</title>
</head>
<body>
<h1>Мой каталог</h1>
<form action="" method="post" enctype="multipart/form-data" >
    <p><input name="add" type="file" /></p>
    </p><input name="save" type="submit" value="Сохранить" /></p>
</form>
<?php
if(isset($_FILES["add"]))
{
    $myfile = $_FILES["add"]["tmp_name"];
    $myfile_name = $_FILES["add"]["name"];
    $error_flag = $_FILES["add"]["error"];

// Если ошибок не было
    if($error_flag == 0)
    {

        $upload='./files/' . $myfile_name;

        copy($_FILES['add']['tmp_name'], $upload);

    }
}
$dir = __DIR__ . "/files/";
$files = scandir($dir);
foreach (array_diff($files, ['..', '.']) as $file)
    {
        echo <<< OUT
<p><b>$file</b> <a href="/dashadasha/files/$file">Скачать</a></p>
OUT;

    }
?>
</html>
