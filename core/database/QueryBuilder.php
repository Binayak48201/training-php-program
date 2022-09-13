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

	public function insert($table,$data)
	{
		$insert = sprintf(
			'insert into %s (%s) values (%s)',
			$table,
			implode(', ',array_keys($data)),
			':' . implode(', :',array_keys($data)));
		try{
			$statement = $this->pdo->prepare($insert);
			$statement->execute($data);
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
}
