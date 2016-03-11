<?php


namespace CTDesarrollo\QueryBuilder\Expressions\Conditions;


class Equals
{
	/**
	 * @var string
	 */
	protected $field;

	/**
	 * @var array $value
	 */
	protected $value;

	public function __construct($field, $value)
	{
		$this->field = $field;
		$this->value = $value;
	}

	public function __toString()
	{
		return "wtf";
	}
}