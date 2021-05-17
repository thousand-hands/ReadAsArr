<?php

namespace ReadAsArr;

class ReadCsv
{
    public static function asArr($fileName): \Generator
    {
        if (file_exists($fileName) && $handle = fopen($fileName, 'rb')) {
            while (feof($handle) === false) {
                yield fgetcsv($handle, 0, ",");
            }
            fclose($handle);
        }
    }
}