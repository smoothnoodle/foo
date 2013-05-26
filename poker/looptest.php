<?php
//$face = array("2","4","1","3","13","5","10","8","11");
//$face = array("5","7","8","2","3","4","1");
$face = array("1","4","8","2","6","5","3");

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
print_r($face);
return $face[$lenght-1];

}
echo findmax($face);

?>