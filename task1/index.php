<?php
spl_autoload_register(function ($class) {

    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    $explode = explode(DIRECTORY_SEPARATOR,$class);
    // меняем "_" только в имени класса
    $last = array_pop($explode);
    $last = str_replace('_',DIRECTORY_SEPARATOR, $last);
    array_push($explode, $last);
    $implode = implode(DIRECTORY_SEPARATOR, $explode);

    $file = sprintf("src/%s.php", $implode);
    if (file_exists($file)) {
        require $file;
    }
});

use \Doctrine\Common\ClassLoader;
use \my\package\Class_Name as Name;
use \my\package_name\Class_Name;

echo 'Задание 1 <br><br>';

(new Class_Name())->show();
(new ClassLoader())->show();
(new Name())->show();