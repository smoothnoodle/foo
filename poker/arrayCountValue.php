<?php

//$face1 = array("1","2","4","5","7");//single, return 5 elements

/*function is_four($face1){
//return 0=false, 1=true
	if(count(array_unique($suit1)) == 1){
		return 1;
	}else{
		return 0;
	}
}*/

//echo is_flush($suit1);

//$input = array(4, "4", "3", 4, 3, "3");
//$result = array_unique($input);
//var_dump($result);

//$array = array(1, "hello", 1, "world", "hello");
$temp = array_count_values($face1);
sort($temp);
echo "count: ".count($temp)."<br>";
echo "max: ".max($temp);
//print_r($temp);

?>