<?php
/**
 * Created by PhpStorm.
 * User: jigar-halani
 * Date: 4/5/16
 * Time: 11:45 AM
 */
function pr($var)
{
	echo $var."<br>";
}

Class dog {
	public $var;
	public STATIC $i=12;
	function __construct($name='demo1')
	{
		$this->var=$name;

	}
}
$d=new dog();
$j=new dog('demo2');


pr($d->var);
pr($j->var);
pr(dog::$i++);
pr(dog::$i);