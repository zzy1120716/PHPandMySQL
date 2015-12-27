<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/12/19
 * Time: 17:57
 */
//check we have the appropriate variable data
//variables are button_text and color
$button_text = $_REQUEST['button_text'];
$color = $_REQUEST['color'];

if(empty($button_text) || empty($color)) {
	echo 'Could not create image - form not filled out correctly';
	exit;
}

//create an image of the right background and check size
$im = imagecreatefrompng($color.'-button.png');

$width_image = imagesx($im);
$height_image = imagesy($im);

//Our images need an 18 pixel margin in from the edge of the image
$width_image_wo_margins = $width_image - (2*18);
$height_image_wo_margins = $height_image - (2*18);

//Work out if the font size will fit and make it smaller until it does
//Start out with the biggest size that will reasonably fit on our buttons
$font_size = 33;

//you need to tell GD2 where your fonts reside
putenv('GDFONTPATH=C:\Windows\Fonts');
$fontname = 'arial';

do {
	$font_size--;

	//find out the size of the text at that font size
	$bbox = imagettfbbox($font_size, 0, $fontname, $button_text);

	$right_text = $bbox[2];//right co-ordinate
	$left_text = $bbox[0];//left co-ordinate
	$width_text = $right_text - $left_text;//多宽？
	$height_text = abs($bbox[7] - $bbox[1]);//多高？

} while (

	$font_size > 8 &&
	($height_text > $height_image_wo_margins ||
	 $width_text > $width_image_wo_margins)

);
if($height_text > $height_image_wo_margins || $width_text > $width_image_wo_margins) {
	//no readable font size will fit on button
	echo 'Text given will not fit on button.<br/>';
} else {
	//We have found a font size that will fit
	//Now work out where to put it
	$text_x = $width_image/2.0 - $width_text/2.0;
	$text_y = $height_image/2.0 - $height_text/2.0;

	if($left_text < 0) {
		$text_x += abs($left_text); // add factor for left overhang
	}

	$above_line_text = abs($bbox[7]); // how far above the baseline?
	$text_y += $above_line_text; // add baseline factor

	$text_y -= 2;// adjustment factor for shape of our template

	$white = imagecolorallocate($im, 255, 255, 255);

	imagettftext($im, $font_size, 0, $text_x, $text_y, $white, $fontname, $button_text);

	Header('Content-type: image/png');
	imagepng($im);
}



























