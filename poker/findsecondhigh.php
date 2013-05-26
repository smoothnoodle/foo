<?php
$face = array("1","4","8","2","6","5","3");
//$face = array("5","7","8","2","3","4","1");

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
echo "second highest number: ".$secondhightest = max($face);
//echo $secondhightest = max($face);

//return the highest value back to the array
$face[$tempindex]=$tempvalue;

//print_r($face);
function findmax($face){
$lenght=count($face);
for($x=0;$x<$lenght;$x++){
	//echo $face[$x];
	$y=$x+1;
	for($y;$y<$lenght;$y++){
	If($face[$x]>$face[$y]){
		//echo "work";
		$temp=$face[$x];
		$face[$x]=$face[$y];
		$face[$y]=$temp;
	};
	};
};
//print_r($face);
return $face[$lenght-1];
};


?>