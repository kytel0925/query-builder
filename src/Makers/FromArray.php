<?php


namespace CTDesarrollo\QueryBuilder\Makers;


class FromArray extends Maker
{
	private $q;

	public function __construct(array $q){
		parent::__construct();

		$this->q = $q;
		$this->buildStatement();
	}

	protected function buildStatement(){
		$this->statement->select($this->q['from']);
	}

	public function getSql(){
		return "SELECT * FROM person";
	}

	public function getValues()
	{
	}
}