<?php
//$face = array("2","5","4","5","9","7","8");//no snake, return 8 lenghth??
$face = array("2","3","4","5","6","7","8");
//$face = array("1","3","4","5","6","7","9");
//$face = array("1","3","4","5","5","6","7");//problem with two 5 in the middle
//$face = array("10","11","12","13","14","14","14");//yes snake, return 12345
//$face = array("10","3","4","5","6","7","1");//yes snake, return 1 12345
//$face = array("9","10","10","11","12","13","14");//why this return 121 12345
//$face = array("9","9","9","10","11","12","13");//why this return 11 12345

function is_snake($face){
//return 0=false, 1=true 

$face=array_unique($face);//add this line
sort($face);
"length: ".$arrlength=count($face);
Print_r($face);

	for($y=0;$y<3;$y++){
	$min=$face[$y];
	//$z=$y+5;
	$z=$arrlength-$y;//that's correct 7,6,5
	//echo "z: ".$z."<br>";
	$count =0;

		for($x=$y;$x<$arrlength;$x++){
			if($face[$x]==$min){
				 $count = $count+1;//
				//echo "<br>".$face[$x];//all combine of snake should show up
				
					if($count==5){//that's not good... 
						echo "<br>".$face[$x];//magic answer.. I can find out the magic number...now I can go backaward -5 to find out the low index
						$low=$face[$x]-5;
						echo "<br>".$low;						
						//return array($result, $length);
					};
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