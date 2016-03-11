<?php


namespace CTDesarrollo\QueryBuilder\Makers\Interfaces;


interface Maker
{
	public function getSql();
	public function getValues();
}