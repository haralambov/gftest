<?php

include '../../gf/App.php';

$app = \GF\App::getInstance();
\GF\Loader::registerNamespace('Models', __DIR__ . '/../models');
$app->run();

new Models\User();

