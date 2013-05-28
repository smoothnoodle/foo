<?php
//$face = array("2","5","4","5","9","7","8");//no snake, return 8 lenghth??
//$face = array("2","3","4","5","6","7","8");
$face = array("1","3","4","5","6","7","9");
//$face = array("1","3","4","5","5","6","7");problem with two 5 in the middle
//$face = array("10","11","12","13","14","14","14");//yes snake, return 12345
//$face = array("10","3","4","5","6","7","1");//yes snake, return 1 12345
//$face = array("9","10","10","11","12","13","14");//why this return 121 12345
//$face = array("9","9","9","10","11","12","13");//why this return 11 12345

function is_snake($face){
//return 0=false, 1=true 
"length: ".$arrlength=count($face);
sort($face);
$flush=array();

	for($y=0;$y<3;$y++){
	$min=$face[$y];
	$z=$y+5;
	//$z=$arrlength-$y;
	$count =0;

		for($x=$y;$x<$z;$x++){
		//echo $count."<br>";
		if($face[$x]==$min){	
			//echo $face[$x];
			//echo "<br>";
			$flush[] = $count;
			echo $count = $count+1;
			echo "<br>";
				//if($count==5){
					$length=count($flush);
					$result=1;
					//return array($result, $length);
				//};
			};
		$min = $min+1;
		};
	};
	
	$length=0;//
	$result=0;
	return array($result, $length);

};


$result=is_snake($face);
$is_snake=$result[0];
$length=$result[1];

?>