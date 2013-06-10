<?php
$face = array("1","4","8","2","6","5","3");
//$face = array("5","7","8","2","3","4","1");

$lenght=count($face);

$highest=0;

	for($x=0;$x<$lenght;$x++){
		if($highest<$face[$x]){
			$highest=$face[$x];//need the index???? of 2
			$y=$x;//correct
		};
	};
	
$face[$y] = null;//correct
//print_r($face);

$second=0;

	for($z=0;$z<$lenght;$z++){
		if($second<$face[$z]){
			$second=$face[$z];
		};
	};

	echo $second;


?>