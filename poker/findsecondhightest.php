<?php
$face = array("5","6","8","2","3","4","1");

//echo max($face);

$length=count($face);

//find the hightest value and replace with null
for($x=0;$x<$length;$x++){
	if($face[$x]==max($face)){
		 $tempindex = $x;
		 $tempvalue = $face[$x]; 
		 $face[$x] = null;
		 //print_r($face);
	};
};

//find the second hightest value here
echo $secondhightest = max($face);

//return the highest value back to the array
$face[$tempindex]=$tempvalue;

print_r($face);





?>