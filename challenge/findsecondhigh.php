<?php
//$face = array("1","4","8","2","6","5","3");
$face = array("5","7","8","2","3","4","1");

$length=count($face);

echo $max = findmax($face);//without this line, problem with some array pattern? why?

for($x=0;$x<$length;$x++){
	if($face[$x]==$max){//max($face) should always remain the same.. not in this case in some array
		 $tempindex = $x."|";
		 $tempvalue = $face[$x]."|"; 
		 echo "<br>";
		 $face[$x] = null;
		 //print_r($face);
	};
};

//find the second hightest value here
echo "second highest number: ".$secondhightest = findmax($face);
//echo $secondhightest = max($face);

//return the highest value back to the array
$face[$tempindex]=$tempvalue;

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


?>