<?php

require_once __DIR__. '/autoload.php';

function loader($class)
{
    $file = __DIR__. '/' .str_replace('\\', '/', strtolower($class)). '.php';

    if (is_file($file)) {
        include_once ($file);

        return true;
    } else {
        return false;
       }
}

spl_autoload_register('loader');