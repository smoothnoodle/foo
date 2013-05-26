<?php
$face = array("1","4","8","2","6","5","3");

//print_r($face);
function findmax($face){
$lenght=count($face);
	for($x=0;$x<$lenght;$x++){
		if($face[$x]<$face[$x+1]){
			$highest=$face[$x];
		};
	};
return $hightest;
};

echo findmax($face);

?>