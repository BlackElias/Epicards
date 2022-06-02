<?php
require 'vendor/autoload.php';

use Google\Cloud\Vision\V1\Feature\Type;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;
use Google\Cloud\Vision\V1\Likelihood;
use Google\Cloud\Vision\VisionClient;
putenv('GOOGLE_APPLICATION_CREDENTIALS=key.json');

$vision = new VisionClient();

$imageResource = fopen( 'upload/card.png', 'r');
$image = $vision->image($imageResource, [ 'text' ]);
$annotation = $vision->annotate($image);

$text = $annotation->text()[0];

echo $text->description();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>