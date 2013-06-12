<?php
//$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
//$face = array("4","5","6","7","8","8","8");
//$face = array("2","3","4","5","6","6","6");
$face = array("2","3","4","5","6","6","6");


$highkey=6;

function check_high($face,$highkey){
//input: $face array must be sorted, otherwise wouldn't work
//return 0=false, no higher index
$key = array_search($highkey, $face); // $key = 2;
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

echo check_high($face,$highkey);


?>
