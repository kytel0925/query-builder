<?php


namespace CTDesarrollo\QueryBuilder\Makers;
use CTDesarrollo\QueryBuilder\Makers\Interfaces\Maker as MakerInterface;
use NilPortugues\Sql\QueryBuilder\Builder\GenericBuilder;

/**
 * Class Maker
 * @package CTDesarrollo\QueryBuilder\Makers
 *
 * Construye un nuevo statement desde una estructura de datos
 */
abstract class Maker implements MakerInterface
{
	/**
	 *
	 * @var GenericBuilder
	 */
	protected $statement;

	public function __construct()
	{
		$this->statement = new GenericBuilder();
	}

	/**
	 * Si se usa en un contexto string se retorna el query en esta simple
	 *
	 * @return string
	 */
	public function __toString(){
		return $this->getSql();
	}

	abstract protected function buildStatement();


	public static function fromArray(array $data){

	}
}

