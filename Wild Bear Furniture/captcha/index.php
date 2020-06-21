<?php
require("../inc.config.php");

# Write text to the image using TrueType fonts.
$size 			= 20;
$chart_start 	= 10;
$char_space 	= 25;
$y 				= 25;

# Replace confusing characters
define('CAPTCHA_LENGTH', 5); # Range: 4 - 10
$_SESSION['security_code'] = strtoupper(substr(preg_replace('/[01ILOUV]+/i', '', md5(time())), rand(0, 10), CAPTCHA_LENGTH));
#echo $_SESSION['security_code'];
$letters = str_split($_SESSION['security_code']);

# Define a table with colors (the values are the RGB components for each color).
$colors_table = array(
	array(35, 113, 191),
	array(55, 85, 114),
	array(55, 114, 85),
	array(114, 21, 67),
	array(0, 0, 0),
	array(255, 120, 0),
);

$image = imagecreatefrompng('background/noise-'.rand(1, 2).'.png');

$angles = array();
$colors = array();
$text_colors = array();
for($i=0; $i<CAPTCHA_LENGTH; ++$i)
{
	$angles[$i] = rand(-20, 20);
	$colors[$i] = rand(0, count($text_colors));
	$fonts[$i]  = 'fonts/'.rand(11, 16).'.ttf';

	# Allocate colors for letters.
	$text_colors[$i] = imagecolorallocate ($image, $colors_table[$colors[$i]][0], $colors[$colors[$i]][1], $colors[$colors[$i]][2]);

	imagettftext($image, $size, $angles[$i], $chart_start + ($char_space * $i), $y, $text_colors[$i], $fonts[$i], $letters[$i]);
}

#print_r($letters);
#print_r($colors_table);
#print_r($colors);
#print_r($angles);
#print_r($fonts);
#die($rand_str);

header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>