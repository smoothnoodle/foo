<?php
//$face = array("1","4","8","2","6","5","3");
$face = array("5","7","8","2","3","4","1");

$lenght=count($face);

$y=high($face,$lenght);
$face[$y] = null;//correct
$z=high($face,$lenght);
echo $second=$face[$z];

function high($face,$lenght){
//return the highest index of the array
$highest=0;
	for($x=0;$x<$lenght;$x++){
		if($highest<$face[$x]){
			$highest=$face[$x];//need the index???? of 2
			$y=$x;//correct
		};
	};
return $y;
}

?>