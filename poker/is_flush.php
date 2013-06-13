<?php
$suit = array("4","4","4","4","4","3","2");

function is_flush($suit){
//0 is false, 1 is true

	$temp = array_count_values($suit);
	//Array ( [4] => 5 [3] => 1 [2] => 1 ) 
	//print_r($temp);
	echo $max = max($temp);
	//echo "count: ".count($temp)."<br>";
	//echo "max: ".max($temp);
	
	if($max>=5){
		return $result=1;
	}else{
		return $result=0;
	}
}

/*function is_flush($suit){
//return 0=false, 1=true
	if(count(array_unique($suit)) == 1){
		return 1;
	}else{
		return 0;
	}
}*/

is_flush($suit);

?>