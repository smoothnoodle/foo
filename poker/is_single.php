<?php
$face = array("5","4","6","1","2","7","3");
function is_single($face){
//0 is false, 1 is true


	$temp = array_count_values($face);
	arsort($temp);
	$max = max($temp);	
	$keys = array_keys($temp);//how does this thing work? do I really need it?
	$secondhighest = $temp[$keys[1]];
	
	if($secondhighest==1 and $max==1){//fourofkinds must before it and hit return!
		return $result=1;
	}else{
		return $result=0;
	}
}

//echo is_single($face);
echo is_single($face);

?>