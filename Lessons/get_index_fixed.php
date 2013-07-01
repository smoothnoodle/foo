<?php
//fix return 0 when the highest index is the same index as before

$face = array("2","3","4","5","6","6","6");//correct, ** must check
//$face = array("2","3","4","5","6","7","8");//correct, ** must check
$suit = array("4","4","4","4","4","4","4");

$high_value=6;

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
};

echo get_index($face,$high_value);

?>