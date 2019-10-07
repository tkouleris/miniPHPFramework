<?php

use Framework\Framework;
use Framework\Route;

$framework = new Framework( new Route );

$framework->routes()->get( 'testurl', 'TestController','test_get');
$framework->routes()->post( 'testurl', 'TestController','test_post');