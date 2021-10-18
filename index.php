<?php
require 'vendor/autoload.php';


use CowSay\Cow;

$bessie = new Cow('Hello COCO!');


// store the output in a variable
$bessie->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');

echo $bessie;


