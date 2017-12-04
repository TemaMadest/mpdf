<?php
  $uploaddir = '';
  $uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);
  require_once('report.class.php');
  
  if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile)){
    $filename = $_FILES['uploadfile']['tmp_name'];    
    $report = new Report();
    $report->getReport($filename);
  }else{
    echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit;
  }
?>