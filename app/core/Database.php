<?php
class Database
{
	private $dbHost = DB_HOST,
					$dbUser = DB_USER,
					$dbPass = DB_PASS,
					$dbName = DB_NAME,
					$handler,
					$state;

	public function __construct()
	{
		$source = 'mysql:host='.$this->dbHost.';dbname='.$this->dbName;
		$option = [
				PDO::ATTR_PERSISTENT => true,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		];

		try {
			$this->handler = new PDO($source,$this->dbUser,$this->dbPass, $option);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function query($query)
	{
		$this->state = $this->handler->prepare($query);
	}

	public function bind($param, $val, $type = null)
	{
		if (is_null($type))
		{
			switch (true)
			{
				case is_int($val):
					$type = PDO::PARAM_INT;
					break;
				case is_bool($val):
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($val):
					$type = PDO::PARAM_NULL;
					break;
				default:
					$type = PDO::PARAM_STR;
			}
		}
		$this->state->bindValue($param, $val, $type);
	}

	public function execute()
	{
		$this->state->execute();
	}

	public function setResults()
	{
		$this->execute();
		return $this->state->fetchAll(PDO::FETCH_ASSOC);
	}

	public function setResult()
	{
		$this->execute();
		return $this->state->fetch(PDO::FETCH_ASSOC);
	}

}