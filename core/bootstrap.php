<?php

use Farzanegan\Connection;
use Farzanegan\QueryBuilder;
use Farzanegan\App;

$config = file_get_contents("config.json");

$config = json_decode($config, true);

$pdo = Connection::make($config);

App::set('query', new QueryBuilder($pdo));

