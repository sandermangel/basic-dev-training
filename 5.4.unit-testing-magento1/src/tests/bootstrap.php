<?php

require __DIR__ . '/../shell/abstract.php';
require __DIR__ . '/../vendor/autoload.php';

ini_set('memory_limit', '512M');

class ImplementShell extends Mage_Shell_Abstract
{
    public function run() { }
}

$shell = new ImplementShell();
$shell->run();