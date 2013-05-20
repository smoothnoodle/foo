<?php
//merge two array together
$array1 = array(1, 2, 4);
$array2 = array(4,5,6);


function merge($array1, $array2){
	$result = array_merge($array1, $array2);
	return $result;
};

$result = merge($array1, $array2);
print_r($result);

?>