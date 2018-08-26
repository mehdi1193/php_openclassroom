<?php
header("Content-type:image/png");
$image = imagecreatefromjpeg("run.jpeg");
imagejpeg($image);

?>
