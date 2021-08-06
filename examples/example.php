<?php

require_once __DIR__.'/../src/Scraper.php';

use KhamdullaevUz\Parser\Scraper;

$parser = new Scraper;

$data = $parser->getContent("https://khamdullaev.uz");

var_dump($data);