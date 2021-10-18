<?php
use CowSay\Cow;

require './vendor/autoload.php';

$bessie = new Cow('Hello, Farm!');
$bessie->setEyes('oO')
       ->setTongue('U')
       ->setPoop('@@@')
       ->setUdder('W');


// store the output in a variable
$output = $bessie->say();
echo $output;

// or just echo the object for direct output
echo $bessie;
