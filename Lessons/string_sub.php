<?php
$player = array("1.4","2.4","13.4","4.4","14.4");

//echo $rest = substr("14.4", 3);
function card_split($player){
	for($x=0;$x<5;$x++){
		$face1[] = substr($$player[$x], 0, -2);
		//echo strlen($card[$x])."<br>";
		If(strlen($player[$x])==4){
			//echo $card[$x];
			$suit1[] = substr($player[$x], 3);
		}else{
			$suit1[] = substr($player[$x], 2);
		}
	}
}
print_r($face1);
echo "<br>";
print_r($suit1);

?>