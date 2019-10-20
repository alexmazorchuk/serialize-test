#!/usr/bin/env php
<?php

declare(strict_types=1);

require_once __DIR__ . './../vendor/autoload.php';

use App\Test\testObject;
use App\JsonSerialize;
use App\XmlSerialize;
use App\YamlSerialize;

$jsonSerialize = new JsonSerialize();
$xmlSerialize = new XmlSerialize();
$yamlSerialize = new YamlSerialize();

$testObject = new testObject('Name Privat', 111, ['first', ['one', 'two']]);

echo $jsonSerialize->serialize($testObject) . PHP_EOL;
echo $xmlSerialize->serialize($testObject) . PHP_EOL;
echo $yamlSerialize->serialize($testObject) . PHP_EOL;
