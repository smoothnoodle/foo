<?php
$face = array("5","5","6","2","2","7","3");
function is_twopair($face){
//0 is false, 1 is true


	$temp = array_count_values($face);
	arsort($temp);
	$max = max($temp);	
	$keys = array_keys($temp);//how does this thing work? do I really need it?
	$secondhighest = $temp[$keys[1]];
	
	if($secondhighest==2 and $max==2){//fourofkinds must before it and hit return!
		return $result=1;
	}else{
		return $result=0;
	}
}

//echo is_twopair($face);
echo is_twopair($face);

?>