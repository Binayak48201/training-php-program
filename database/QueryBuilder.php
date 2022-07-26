<?php

class QueryBuilder
{
    private $pdo = '';

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    } 

    public function selectAll($table)
    {
        $query = $this->pdo->prepare("select * from {$table}");
        $query->execute();
        return $query->fetchAll();
    }
}