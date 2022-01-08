<?php

# load app lib files in libs/ foler by listing files in it
$dir = __DIR__ . "/libs";
$files = scandir($dir);
foreach ($files as $file) {
    if (is_file($dir . "/" . $file)) {
        require_once $dir . "/" . $file;
    }
}

