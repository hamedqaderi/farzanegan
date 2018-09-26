<?php

namespace Farzanegan;

class Connection
{
  public static function make($config) 
  {
    try {
      return new \PDO(
        $config['dsn'] . ";dbname=" . $config['dbname'],
        $config['user'],
        $config['password'],
        $config['options']
      );
    } catch(\PDOException $e) {
      die("Can not connect to db. " . $e->getMessage());
    }
     
  }
}