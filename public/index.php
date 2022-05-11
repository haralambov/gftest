<?php

include '../../gf/App.php';

$app = \GF\App::getInstance();
$app->setRouter('JsonRPCRouter');
$app->run();
$app->getSession()->counter+=1;
echo $app->getSession()->counter;
