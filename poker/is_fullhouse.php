<?php
$face = array("5","5","5","2","2");
function is_fullhouse($face){
//0 is false, 1 is true

	$temp = array_count_values($face);
	$count = count($temp);
	$max = max($temp);
	//echo "count: ".count($temp)."<br>";
	//echo "max: ".max($temp);
	
	if($count==2 and $max==3){
		return $result=1;
	}else{
		return $result=0;
	}
}

echo is_fullhouse($face);

?>