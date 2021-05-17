# read as arr

ReadAsArr is a library based on Generator.You can use it read a file as array.

Thanks for you use;

# Demo

```php
<?php

use ReadAsArr\ReadCsv;
use ReadAsArr\ReadFile;

foreach(ReadCsv::asArr(__DIR__.'/tmp.csv') as $value){
    echo implode(":",$value).PHP_EOL;
}

foreach(ReadFile::asArr(__DIR__.'/tmp.csv') as $value){
    echo $value.PHP_EOL;
}
```



