<?php
require_once __DIR__.'/vendor/autoload.php';

//use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\GDLibRenderer;
use BaconQrCode\Writer;

$renderer = new GDLibRenderer(300);
$writer   = new Writer($renderer);
//$writer->writeFile('Hello World!', 'qrcode.png');

$qr_image = base64_encode($writer->writeString("Hola, hola"));

echo "<img src='data:image/png;base64,$qr_image' alt='QR Code'>";

