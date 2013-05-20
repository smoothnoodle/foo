<?php
$face = array("5","5","5","5","3","2","1");
function is_fourkind($face){
//0 is false, 1 is true

	$temp = array_count_values($face);
	//print_r($temp);
	echo $max = max($temp);
	//echo "count: ".count($temp)."<br>";
	//echo "max: ".max($temp);
	
	if($max==4){
		return $result=1;
	}else{
		return $result=0;
	}
}
echo is_fourkind($face);

?>