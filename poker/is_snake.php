<?php
//$face = array("2","5","4","5","9","7","8");//correct
$face = array("2","3","4","5","6","7","8");//correct, ** must check
//$face = array("1","3","4","5","6","7","9");//correct
//$face = array("9","10","10","11","12","13","14");//correct
//$face = array("1","3","4","5","5","6","7");//correct
//$face = array("10","11","12","13","14","14","14");//correct
//$face = array("10","3","4","5","6","7","1");//correct
//$face = array("9","9","9","10","11","12","13");//correct

function is_snake($face){
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
						$high=$uface[$x];
						$low=$uface[$x]-4;//no need
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

return array($result, $high, $rflush);
};

$result=is_snake($face);
$is_snake=$result[0];
$high=$result[1];
$rflush=$result[2];

//print_r($rflush);

?>