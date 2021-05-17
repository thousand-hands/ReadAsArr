<?php
require __DIR__.'/../vendor/autoload.php';

use ReadAsArr\ReadCsv;
use ReadAsArr\ReadFile;

foreach(ReadCsv::asArr(__DIR__.'/tmp.csv') as $value){
    echo implode(":",$value).PHP_EOL;
}

foreach(ReadFile::asArr(__DIR__.'/tmp.csv') as $value){
    echo implode(":",$value).PHP_EOL;
}

