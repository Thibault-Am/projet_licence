<?php

require_once 'src/loader/utils/AbstractClassLoader.php';
require_once 'src/loader/utils/ClassLoader.php';

$loader = new \loader\utils\ClassLoader('src');
$loader->register();

use classes\users\Admin;

$admin = new Admin('AMAGAT', 'Thibault');

echo "Welcome to Mario Pizza!\n\n";

echo "Users | Choose between: [1]Admin, [2]Customers, [3]Pizzaiolo\n",
fscanf(STDIN, "%s" , $choix);

if ($choix=="1"){
    echo "\nYou are an Admin\n";
}elseif ($choix=="2") {
    echo "\nYou are a Customer\n";
}elseif ($choix=="3") {
    echo "\nYou are a Pizzaiolo\n";
}
