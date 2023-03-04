# QR Code generator


## Introduction
BaconQrCode-Basis is simplified version of Bacon/BaconQrCode with minimal 
requirements and minimal use of external libraries. Only the basic functionality
is left - generate classic b/w QR code to PNG file using standard GD library.

## Example usage
```php
require_once __DIR__.'/vendor/autoload.php';
use BaconQrCode\Renderer\GDLibRenderer;
use BaconQrCode\Writer;

$renderer = new GDLibRenderer(300);
$writer   = new Writer($renderer);
$qr_image = base64_encode($writer->writeString("Hola, hola"));
echo "<img src='data:image/png;base64,$qr_image' alt='QR Code'>";

//$writer->writeFile('Hello World!', 'qrcode.png');
```

## Thanks
The code is taken from Bacon/BaconQrCode and GD lib backend from arxeiss//BaconQrCode