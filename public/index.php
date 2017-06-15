<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Siler\Functional as F;
use Siler\Route;

$parsedown = new Parsedown;

Route\get('/', F\puts($parsedown->text(file_get_contents(__DIR__ . '/../content/home.md'))));

