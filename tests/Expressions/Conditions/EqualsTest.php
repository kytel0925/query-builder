<?php


namespace CTDesarrollo\QueryBuilder\Expressions\Conditions;
use PHPUnit_Framework_TestCase as TestCase;


class EqualsTest extends TestCase
{
	public function testBasic(){
		$equals = new Equals("some", "data");

		$this->assertEquals("wtf", $equals->__toString());
	}
}
