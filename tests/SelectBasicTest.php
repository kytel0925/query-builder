<?php
/*
 * This file is part of QueryBuilder.
 *
 * (c) Telmo Riofrio <kytel0925@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Tenemos un test para probar selects simples
 *
 * Estos test fueron el inicio del proyecto y fue desde aqui que se empezo el desarrollo del QueryBuilder
 */
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Class SelectBasic
 * @package CTDesarrollo\QueryBuilder\Expressions\Conditions
 */
class SelectBasicTest extends TestCase
{
	/**
	 * Prueba basica de un select * from {table}
	 */
	public function testFromTable(){
		$q = ['from' => 'person'];

		$make = new CTDesarrollo\QueryBuilder\Makers\FromArray($q);

		$this->assertEquals("SELECT * FROM person", $make->getSql());
	}
}