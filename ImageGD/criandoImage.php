<?php

header("Content-Type: image/png");

$image = imagecreate(500 , 256);

$blue = imagecolorallocate($image, 0,0,255);
$white = imagecolorallocate($image, 255,255,255);

imagestring($image, 5, 165, 120,"Curso PHP Essencial!",$white);

imagepng($image);

imagedestroy($image);

