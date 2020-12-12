<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>Catalog</title>
  </head>
 <body>
<form action="" method="post" enctype="multipart/form-data" >
    <input name="add" type="file" />
    <input name="save" type="submit" value="Сохранить" />
</form>
 </body>
</html>
<?
     if(isset($_FILES["add"])) 
{ 
$myfile = $_FILES["add"]["tmp_name"]; 
$myfile_name = $_FILES["add"]["name"]; 
$myfile_size = $_FILES["add"]["size"]; 
$myfile_type = $_FILES["add"]["type"]; 
$error_flag = $_FILES["add"]["error"];

// Если ошибок не было 
if($error_flag == 0) 
{

$upload='./my_files/' . $myfile_name;

 copy($_FILES['add']['tmp_name'], $upload);

}
}
$dir = "./my_files/";
$files = scandir($dir);
?>
<form action="download.php" method="POST"  >
<?
foreach ($files as $n_files)
{
    ?>
    <input name="file" type="radio" value="<?php echo $n_files; ?>">
    <?
    echo $n_files . '<br>';

}
    ?>
    <input name="download" type="submit" value="Сохранить" />
    </form>
    <?
?>