<?php

include '../../gf/App.php';

$app = \GF\App::getInstance();
$app->run();
echo $app->getConfig()->db['user'];
