<?php
$face = array("5","5","5","2","6","4","3");
function is_threekind($face){
//0 is false, 1 is true

	$temp = array_count_values($face);
	arsort($temp);
	print_r($temp);
	$max = max($temp);	
	$keys = array_keys($temp);//how does this thing work? do I really need it?
	$secondhighest = $temp[$keys[1]];
	//$secondhighest = $temp[1]; Notice: Undefined offset: 1 in C:\xampp\htdocs\foo\poker\is_threekind.php on line 14
	
	if($secondhighest==1 and $max==3){//fourofkinds must before it and hit return!
		return $result=1;
	}else{
		return $result=0;
	}
}

//echo is_threekind($face);
echo is_threekind($face);

?>