<?php
$face = array("5","4","3","2","1");
function is_single($face){
//0 is false, 1 is true

	$temp = array_count_values($face);
	$count = count($temp);
	$max = max($temp);
	//echo "count: ".count($temp)."<br>";
	//echo "max: ".max($temp);
	
	if($count==5){
		return $result=1;
	}else{
		return $result=0;
	}
}

echo is_single($face);

?>