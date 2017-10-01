<?php

require_once __DIR__ . '/vendor/autoload.php';

echo 'Say hello ' . PHP_EOL;
echo Sander\Module\Testfile::hello();

echo PHP_EOL;
echo Helper_RandomFile::hello();

echo PHP_EOL;
echo Sander\Localstuff\Service\Sayhello::hello();

echo PHP_EOL;