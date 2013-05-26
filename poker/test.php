<?php
$face = array("1","4","8","2","6","5","10","3");

//print_r($face);
function findmax($face){
$lenght=count($face);
$highest=0;
	for($x=0;$x<$lenght;$x++){
		if($highest<$face[$x]){
			$highest=$face[$x];
		};
	};
return $highest;
};

echo findmax($face);

?>