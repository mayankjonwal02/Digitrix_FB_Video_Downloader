<?php
$downloadURL = $_GET['link'];
$type = $_GET['type'];
$title = time();
$fileName = $title.'.'.$type;
$rand = time();
$path = "files/$rand.$type";
  $ch = curl_init($downloadURL);
  $fp = fopen($path, 'wb');
  curl_setopt($ch, CURLOPT_FILE, $fp);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_exec($ch);
  curl_close($ch);
  fclose($fp);
  
  
  
header("Content-Description: File Transfer");
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=" . urlencode($fileName));
header("Content-Transfer-Encoding: binary");
header("Expires: 0");
header("Cache-Control: must-revalidate");
header("Pragma: public");
header("Content-Length: " . filesize($path));
ob_clean();
flush();
readfile($path);
exit;


/*
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"" . ucwords($fileName) . "\""); 
readfile($path);
*/
?>