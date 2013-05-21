<?php
$face = array("5","5","5","2","2","2","3");
function is_fullhouse($face){
//0 is false, 1 is true
//211


	$temp = array_count_values($face);
	arsort($temp);
	print_r($temp);
	$max = max($temp);	
	$keys = array_keys($temp);//how does this thing work? do I really need it?
	echo $keys[0];//[5] => 3, u can't just said index 0, if u want to get 3 out u need to call 5.. $keys return it in order
	$secondhighest = $temp[$keys[1]];
	//$secondhighest = $temp[1]; Notice: Undefined offset: 1 in C:\xampp\htdocs\foo\poker\is_fullhouse.php on line 14
	
	if($secondhighest!=1 and $max==3){//fourofkinds must before it and hit return!
		return $result=1;
	}else{
		return $result=0;
	}
}

//echo is_fullhouse($face);
echo is_fullhouse($face);

?>