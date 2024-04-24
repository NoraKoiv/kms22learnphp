<?php

require 'C:\laragon\www\learnphp\functions.php';

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/learnphp') {
    require 'learnphp\controllers\index.php';
}