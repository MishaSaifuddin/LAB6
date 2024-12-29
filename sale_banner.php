<?php
// Set the content type to output a PNG image
header("Content-Type: image/png");

// Create an image canvas with dimensions 300x150
$image = imagecreate(300, 150);

// Define colors
$white = imagecolorallocate($image, 255, 255, 255); // White background
$red = imagecolorallocate($image, 255, 0, 0);       // Red for the rectangle
$black = imagecolorallocate($image, 0, 0, 0);       // Black for the text

// Fill the background with white
imagefill($image, 0, 0, $white);

// Draw a red rectangle in the center
// Coordinates: top-left (50, 50) to bottom-right (250, 100)
imagefilledrectangle($image, 50, 50, 250, 100, $red);

// Add black text ("Sale!") to the rectangle
// Font size 5, position approximately centered within the rectangle
imagestring($image, 5, 120, 70, "Sale!", $black);

// Output the image as a PNG
imagepng($image);

// Free memory associated with the image
imagedestroy($image);
?>
