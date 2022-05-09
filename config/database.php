<?php

$cnf['default']['connection_uri'] = 'mysql:host=172.17.0.3;dbname=gf';
$cnf['default']['username'] = 'root';
$cnf['default']['password'] = 'root';
$cnf['default']['pdo_options'][PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES 'UTF8'";
$cnf['default']['pdo_options'][PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

$cnf['session']['connection_uri'] = 'mysql:host=172.17.0.3;dbname=session';
$cnf['session']['username'] = 'root';
$cnf['session']['password'] = 'root';
$cnf['session']['pdo_options'][PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES 'UTF8'";
$cnf['session']['pdo_options'][PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

return $cnf;
