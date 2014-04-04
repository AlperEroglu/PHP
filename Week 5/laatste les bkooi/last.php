<?php

Class Auto {
	public $merk;
	public $brandstof;
	public $kleur;
	
	function sound(){
		echo "vroem";
	}
}

$audi = new Auto();

$audi->merk="audi";
$audi->brandstof="diesel";
$audi->kleur="zwart";

$lambo = new Auto();

$lambo->merk="lambo";
$lambo->brandstof="benzine";
$lambo->kleur="geel";
$lambo->sound();

echo"<pre>";

	print_r($audi);
	$audi->sound();
	
	echo "<br />";
	print_r($lambo);
	
	$lambo->sound();
echo"</pre>"; 


?>