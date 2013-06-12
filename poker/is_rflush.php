<?php

function is_straightflush($face,$suit){

$result=is_straight($face);
echo $is_snake=$result[0];
$highs=$result[1];

if (is_straight($face)==1 and is_flush($suit)==1){
		return 1;
	}
	else{
		return 0;
	}
};


function is_straight($face){
//return 0=false, 1=true 
$high=0;
$low=0;
$result=0;
$rflush =array();//royal flush 

$uface=array_unique($face);//**IMPORTANT, without this line, snake will have bug!!!!
sort($uface);
//echo "length: ".$arrlength=count($uface);
$arrlength=count($uface);

Print_r($uface);

	for($y=0;$y<3;$y++){//may be??
	$min=$uface[$y];
	$count =0;

		for($x=$y;$x<$arrlength;$x++){
			if($uface[$x]==$min){
				$count = $count+1;
				//echo "<br>face :".$uface[$x];//all combine of snake should show up
			
					if($count==5){//that's not good... 
						//echo "<br> high: ".$uface[$x];//magic answer.. I can find out the magic number...now I can go backaward -5 to find out the low index
						$rflush[]=$uface[$x];
						//$high=$uface[$x];
						//$low=$uface[$x]-4;//no need
						$result=1;
						//echo "<br> Low: ".$low;						
						//return array($result, $length);
					};
				};
		$min = $min+1;
		};
	};

//echo "<br> hight: ".$high;
//echo "<br> low: ".$low;
//echo "<br> result: ".$result;
//echo "<br><br>";
//print_r($rflush);

return array($result,$rflush);
};//end of is_snake

$result=is_straight($face);
echo $is_snake=$result[0];
$highs=$result[1];

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