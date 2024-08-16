<?php
require 'vendor/autoload.php'; // Load Composer autoloader

use Zend\Barcode\Barcode;

// Data to encode in the barcode
$data = '123456789';

// Barcode type (e.g., CODE_128, QR_CODE, etc.)
$barcodeType = Barcode::CODE_128;

// Barcode image options
$barcodeOptions = ['text' => $data]; // You can customize other options as needed

// Generate the barcode image
$rendererOptions = [];

$barcode = Barcode::factory(
    $barcodeType,
    'image',
    $barcodeOptions,
    $rendererOptions
);

$imageResource = $barcode->draw();
$imagePath = 'barcode.png'; // Output file path

// Save the generated barcode image to a file
imagepng($imageResource, $imagePath);
imagedestroy($imageResource);

// Display the barcode image
echo '<img src="' . $imagePath . '" alt="Barcode">';
