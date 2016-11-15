<?php

class Item{
	var $average;
	var $price;
	var $name;
	var $url;
	var $image;
}


$item1 = new Item;
$item1->name = 'banana';

$item2 = new Item;
$item2->name = 'apple';


//print $item1->price;


function cmp($a, $b)
{
	return strcmp($a->name, $b->name);
}

$your_data[0] = $item1;
$your_data[1] = $item2;

//this usort function sorts an array of objects I think
usort($your_data, "cmp");

for ($i = 0; $i < sizeof($your_data); $i++){
	print $your_data[$i]->name."\n";
}