<?php
if(isset($_POST['file']))
{
     $file = $_POST['file'];     
}
header('Content-Disposition: attachment; filename='.$file.'');
?>