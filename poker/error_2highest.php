<?php
$face = array("1","4","8","2","6","5","3");
//$face = array("5","7","8","2","3","4","1");
//echo max($face);

$length=count($face);

for($x=0;$x<$length;$x++){
	if($face[$x]==max($face)){//max($face) should always remain the same.. not in this case in some array
		 $tempindex = $x."|";
		 $tempvalue = $face[$x]."|"; 
		 echo "<br>";
		 $face[$x] = null;
		 //print_r($face);
	};
};

//find the second hightest value here
echo "second highest number: ".$secondhightest = max($face);
//echo $secondhightest = max($face);

//return the highest value back to the array
$face[$tempindex]=$tempvalue;

//print_r($face);





?>