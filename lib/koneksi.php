<?php

try {
  $conn = new PDO("mysql:host=localhost;dbname=pixel_media_db","root","");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
  print "Koneksi atau query bermasalah" . $e->getMessage() . "</br>";
  die();
}

 ?>
