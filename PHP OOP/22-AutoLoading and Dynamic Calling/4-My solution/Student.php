<?php

spl_autoload_register(function ($classname) {
    echo "loading classname $classname";
    require_once "$classname.php";
 });

$string_helper = new src\Stringhelper();
$string_helper->welcome_message();
 