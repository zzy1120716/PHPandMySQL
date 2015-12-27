<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/12/19
 * Time: 17:08
 */
//set up image
$height = 200;
$width = 200;
$im = imagecreatetruecolor($width, $height);
$white = imagecolorallocate($im, 255, 255, 255);
$blue = imagecolorallocate($im, 0, 0, 64);

//draw on image
imagefill($im, 0, 0, $blue);
imageline($im, 0, 0, $width, $height, $white);
imagestring($im, 4, 50, 150, 'Sales', $white);

//output image
Header('Content-type: image/png');
imagepng($im);

//clean up
imagedestroy($im);