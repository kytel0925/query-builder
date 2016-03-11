<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE & ~E_WARNING);
ini_set('display_errors', 1);

require_once 'vendor/autoload.php';


$app = new \CTDesarrollo\QueryBuilder\Expressions\Conditions\Equals("some", "data");
var_dump($app);

use NilPortugues\Sql\QueryBuilder\Builder\GenericBuilder;

$builder = new GenericBuilder();
$builder->select("persona")->where()->lessThan("asfsf", 12);