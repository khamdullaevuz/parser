<?php

require_once __DIR__.'/../vendor/autoload.php';

use Parser\Parser;

$parser = new Parser;

$data = $parser->getContent("https://khamdullaev.uz");

var_dump($data);