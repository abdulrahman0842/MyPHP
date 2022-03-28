<?php

// Create the size of image or blank image
$image = imagecreate(500, 300);

// Set the background color of image
$background_color = imagecolorallocate($image, 0, 153, 0);

// Set the text color of image
$text_color = imagecolorallocate($image, 255, 255, 255);

// The text to draw 
$text= 'Testing...';

// Replace path by your own font path 
$font = 'arial.ttf';

// Add some shadow to the text

//imagettftext($image, 20, 0, 11, 21, $green, $font,$text);

// Add the text

//imagettftext($image, 20, 0, 10, 20, $black, $font,$text);

// Using imagepng() results in clearer text compared with imagejpeg()

imagejpeg ($image); 
imagedestroy($image);
?>