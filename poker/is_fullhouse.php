<?php
$face = array("5","5","5","2","2","1","1");
function is_fullhouse($face){
//0 is false, 1 is true

	$temp = array_count_values($face);
	arsort($temp);
    print_r($temp);
	$count = count($temp);
	$max = max($temp);
	//echo "count: ".count($temp)."<br>";
	//echo "max: ".max($temp);

	

	$keys = array_keys($temp);
	//print_r($keys);
	//echo "<br>".$keys[1]; // return index which is 2 
	//echo "<br>".$temp[$keys[1]]; // return the value of second index of the array
	
	if($temp[$keys[1]==3 and $max==3){
		return $result=1;
	}else{
		return $result=0;
	}
}

echo is_fullhouse($face);

?>