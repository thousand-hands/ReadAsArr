<?php

namespace ReadAsArr;

class ReadFile
{
    /**
     * @param $fileName
     * @return \Generator
     */
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
