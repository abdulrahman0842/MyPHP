<?php

// Create the size of image or blank image
$image = imagecreate(400, 300);

// Set the background color of image
$background_color = imagecolorallocate($image, 128, 128, 128);

// Set the text color of image
$text_color = imagecolorallocate($image, 0, 0, 0);

// Function to create image which contains string.
imagestring($image, 20, 170, 100, "Hello K.B.H", $text_color);
imagestring($image, 3, 170, 120, "Computer Tech", $text_color);

header("Content-Type: image/png");

imagepng($image);
imagedestroy($image);

?>
