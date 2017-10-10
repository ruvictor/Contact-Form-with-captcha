<?php 
session_start(); 
$width = 60; 
$height = 30; 
$im = imagecreate($width, $height); 
$bg = imagecolorallocate($im, 0, 0, 0); 

// generate random string 
$len = 5; 
$chars = '0123456789'; 
$string = ''; 
for ($i = 0; $i < $len; $i++) { 
    $pos = rand(0, strlen($chars)-1); 
    $string .= $chars{$pos}; 
} 
$_SESSION['img_session'] = md5($string); 

// grid 
$grid_color = imagecolorallocate($im, 175, 0, 0); 
$number_to_loop = ceil($width / 20); 
for($i = 0; $i < $number_to_loop; $i++) { 
    $x = ($i + 1) * 20; 
    imageline($im, $x, 0, $x, $height, $grid_color); 
} 
$number_to_loop = ceil($height / 10); 
for($i = 0; $i < $number_to_loop; $i++) { 
    $y = ($i + 1) * 10; 
    imageline($im, 0, $y, $width, $y, $grid_color); 
} 

// random lines 
$line_color = imagecolorallocate($im, 130, 0, 0); 
for($i = 0; $i < 30; $i++) { 
    $rand_x_1 = rand(0, $width - 1); 
    $rand_x_2 = rand(0, $width - 1); 
    $rand_y_1 = rand(0, $height - 1); 
    $rand_y_2 = rand(0, $height - 1); 
    imageline($im, $rand_x_1, $rand_y_1, $rand_x_2, $rand_y_2, $line_color); 
} 

// write the text 
$text_color = imagecolorallocate($im, 255, 0, 0); 
$rand_x = rand(0, $width - 50); 
$rand_y = rand(0, $height - 15); 
imagestring($im, 10, $rand_x, $rand_y, $string, $text_color); 


header ("Content-type: image/gif"); 
imagegif($im); 
?>