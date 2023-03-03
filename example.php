<?php
require_once __DIR__.'/vendor/autoload.php';

//use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\GDLibRenderer;
use BaconQrCode\Writer;

require_once __DIR__.'/src/Renderer/GDLibRenderer.php';


$renderer = new GDLibRenderer(400);
$writer   = new Writer($renderer);
//$writer->writeFile('Hello World!', 'qrcode.png');



echo "eee";
$qr_image = base64_encode($writer->writeString("hola, hola"));

echo "<img src='data:image/png;base64,$qr_image'>";

//honzito::print();

phpinfo();

