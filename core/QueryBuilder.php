<?php

namespace Farzanegan;

class QueryBuilder
{
  public $pdo;

  public function __construct(\PDO $pdo)
  {
    $this->pdo = $pdo; 
  }

  public function selectAll($table) 
  {
    $sql = "SELECT * FROM {$table} ORDER BY id DESC";

    $rows = $this->pdo->prepare($sql);

    $rows->execute();

    return $rows->fetchAll(\PDO::FETCH_OBJ);
  }

  public function insert($table, $tableData)
  {
    $sql = "INSERT INTO {$table} (" .
    implode(', ', array_keys($tableData))
    . ") VALUES (:" .
    implode(', :', array_keys($tableData)) . ')';

    $row = $this->pdo->prepare($sql);

    $row->execute($tableData);
  }
}