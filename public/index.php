<?php

include '../../gf/App.php';

$app = \GF\App::getInstance();
$app->setRouter('JsonRPCRouter');
$app->run();
var_dump($app->getConnection());
