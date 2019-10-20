#!/usr/bin/env php
<?php

require_once __DIR__ . '../vendor/autoload.php';

use App\Test\testObject;
use App\{JsonSerialize, XmlSerialize, YamlSerialize};

$jsonSerialize = new JsonSerialize();
$xmlSerialize = new XmlSerialize();
$yamlSerialize = new YamlSerialize();

$testUser1 = new testObject('Name Privat', ['Year protected' , 1991], 'public other');
$testUser2 = new testObject(null, 1993, [111, 222, [33, 44]]);

$string = 'string text';
$integer = 1;
$array = [1, 2, [3, 4, [5, 6]]];

$items = [$testUser1, $testUser2];
foreach ($items as $test) {
    echo $jsonSerialize->serialize($test);
    echo $xmlSerialize->serialize($test);
    echo $yamlSerialize->serialize($test);
}

