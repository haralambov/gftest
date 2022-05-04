<?php

include '../../gf/App.php';

$app = \GF\App::getInstance();

$config = \GF\Config::getInstance();
$config->setConfigFolder('../config');

echo $config->app['test1'] . '<br>';
echo $config->db['user'];

$app->run();

