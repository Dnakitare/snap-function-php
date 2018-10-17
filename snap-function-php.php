<?php

/* mathematical function: inputs/outputs are numeric */

function multi_number(){
	echo 2 * 6;
}

multi_number();

/* string function */

function hello(){
	echo 'Hello World!';
}

hello();

/* array function */

$letters = array("a", "b", 3 => "c", "d");

print_r($letters);


/**
 * Created by PhpStorm.
 * User: overlord
 * Date: 10/17/18
 * Time: 8:08 AM
 */