<?php

namespace ReadAsArr;

class ReadFile
{
    public static function asArr($fileName): \Generator
    {
        if (file_exists($fileName) && $handle = fopen($fileName, 'rb')) {
            while (feof($handle) === false) {
                yield fgets($handle);
            }
            fclose($handle);
        }
    }
}
