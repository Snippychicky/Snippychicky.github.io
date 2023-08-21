<?php
$imagesDir = "./pictures/";
$images = array_diff(scandir($imagesDir), array('..', '.'));

header("Content-Type: application/json");
echo json_encode($images);
?>
