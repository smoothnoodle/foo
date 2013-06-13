<?php

//$face = array("2","3","4","5","6","7","8");//correct, ** must check
$face = array("2","3","4","5","6","6","6");//correct, ** must check
$suit = array("4","4","4","4","4","4","4");
$highs = array("6","7","8");


function high_index($face,$high_value){
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
	while($x<=$len and $face[$x]==$face[$key]){//order condition does make a difference
		//echo $x."<br>";
		//echo "high: ".$highkey=$x."<br>";
		$highkey=$x;
		$x++;
	};
return $highkey;
};

function is_rflush($face,$suit,$highs){
//return 0=false, 1=true
//$suit array must be sorted
//$face array must be sorted
//$highs array from straight function, number and high value of the straight
$royal=array();
$count = count($highs);

for($x=0;$x<$count;$x++){//count is three, should be ok

	$high_value=$highs[$x];//good
	$low_value=$high_value-4;//good
	
	$low_index = array_search($low_value, $face);//test
	echo $high_index = high_index($face,$high_value);//test, if $high_index=0, mean something is wrong, by this stage u shouldn't have zero
	
	if($high_index==0){
		echo $high_index = array_search($high_value, $face);
	};

	$temp_suit = array_slice($suit, $low_index, $high_index);//test	
	$result = array_count_values($temp_suit);//check
	$max = max($result);//check
	if($max==5){//check 
		$royal_face=$high_value;
		$royal_suit="suit";
		//merge face and suit then put it in royal array;
		echo "straight_flush";
	};
	};
};//end of is_rflush

is_rflush($face,$suit,$highs);
?>
