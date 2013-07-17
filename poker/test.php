<?php

//$face = array("2","3","4","5","6","7","8");//correct, ** must check
$face = array("2","3","4","5","6","6","6");//correct, ** must check
$suit = array("4","4","4","4","3","4","1");//correct, ** must check
$highs = array("6","7","8");

function is_rflush($face,$suit,$highs){
//return 0=false, 1=true
//this doesn't check is snake or not.. just the suit
//$suit array must be sorted
//$face array must be sorted
//$highs array from straight function, number and high value of the straight

$royal=array();
$count = count($highs);

for($x=0;$x<$count;$x++){//count is three, should be ok

	$high_value=$highs[$x];//good
	$low_value=$high_value-4;//good
	
	$low_index = array_search($low_value, $face);//correct
	$high_index = get_index($face,$high_value);//correct
	
	if($low_index==0){//array slice zero bug fixed
		$high_index = $high_index+1;
	}
	$temp_suit = array_slice($suit, $low_index, $high_index);//test	problem with 0; 
	//print_r($temp_suit);//bug here 04Array ( [0] => 4 [1] => 4 [2] => 4 [3] => 4 ) 
	
	
	$result = array_count_values($temp_suit);//check
	echo "<br>";
	if($result==null){
		$max=null;
	}else{
		//print_r($result);
		$max = max($result);//issues 443
	};	
	
	if($max==5){//I think is perfect.. only work with one signle deck game
		echo $royal_face=$high_value;
		echo $royal_suit="suit";
		//merge face and suit then put it in royal array;
		//echo "straight_flush";
	};
	};
	print_r($royal);
	//return all the highest suit card!! 
};//end of is_rflush

is_rflush($face,$suit,$highs);

function get_index($face,$high_value){
//input: $face array must be sorted, otherwise wouldn't work
//return 0=false, no higher index
$key = array_search($high_value, $face); //correct 4 5 6
//echo "key: ".$key."<br>";

If($key==null){
	return $highkey=0;
};

$length =count($face);

$highkey=0;
$x=$key+1;
$len=$length-1;
//echo "len: ".$len."<br>";
	while($x<=$len and $face[$x]==$face[$key]){//order condition does make a difference, bug if there is no same index, it won't go into the loop and return 
		//echo $x."<br>";
		//echo "high: ".$highkey=$x."<br>";
		$highkey=$x;
		$x++;
	};
	
	if($highkey==0){//is a snake, check! is there a same number next to it-no check!
		$highkey = $key;
	}
	
return $highkey;
};//end of get_index
?>
