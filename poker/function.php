<?php
//$player = array("1.4","2.4","13.4","4.4","14.4");
//$player = array("1.4","2.4","3.4","4.4","5.4");//straight flush
//$player = array("1.4","2.4","3.4","5.4","4.4");//straight flush unsort
//$player = array("7.4","7.3","7.2","7.1","5.4");//four of the kinds
//$player = array("7.4","7.3","7.2","5.3","5.4");//full house
//$player = array("1.4","4.4","11.4","8.4","5.4");//flush
//$player = array("1.4","2.3","3.4","4.2","5.1");//straight
//$player = array("1.4","3.3","2.4","4.2","5.1");//straight unsort
//$player = array("7.4","7.3","7.2","11.3","5.4");//three of the kinds
//$player = array("7.4","7.3","9.2","9.3","5.4");//two pairs
//$player = array("7.4","7.3","11.2","9.3","5.4");//one pairs
//$player = array("7.4","8.3","11.2","9.3","5.4");//one pairs


function hand($player){
//sort card
//split the card to face and suit
$face = face_split($player);
$suit = suit_split($player);

sort($face);
sort($suit);

	if (is_straightflush($face,$suit)==1){
		echo "Straight flush";
		return 9;
	}else if (is_fourkind($face)==1){
		echo "four of the kinds";
		return 8;
	}else if (is_fullhouse($face)==1){
		echo "full house";
		return 7;
	}else if (is_flush($suit)==1){
		echo "flush";
		return 6;
	}else if (is_straight($face)==1){
		echo "straight";
		return 5;
	}else if (is_threekind($face)==1){
		echo "three of the kinds";
		return 4;
	}else if (is_twopair($face)==1){
		echo "two pairs";
		return 3;
	}else if (is_onepair($face)==1){
		echo "one pair";
		return 2;
	}else if (is_single($face)==1){
		echo "single";
		return 1;
	}
}

function face_split($player){
	for($x=0;$x<5;$x++){
		$face[] = substr($player[$x], 0, -2);	
	}
	return $face;
}

function suit_split($player){
	for($x=0;$x<5;$x++){
		If(strlen($player[$x])==4){
			$suit[] = substr($player[$x], 3);
		}else{
			$suit[] = substr($player[$x], 2);
		}
	}
	//print_r($suit);
	return $suit;
}

function is_straightflush($face,$suit){
	if (is_straight($face)==1 and is_flush($suit)==1){
		return 1;
	}
	else{
		return 0;
	}
};

function is_flush($suit){
//return 0=false, 1=true
	if(count(array_unique($suit)) == 1){
		return 1;
	}else{
		return 0;
	}
}

function is_straight($face){
//return 0=false, 1=true 
	$arrlength=count($face);
	$min = min($face);
	$result = 1;
	
	//echo "first: ". $result."<br>";
	
	for($x=0;$x<$arrlength;$x++)
	  {
	  //echo "min: ".$min."<br>";
	  //echo $face[$x];
	  if($face[$x]==$min){
		//echo "true";
	  }else{
		//echo "false";//return false; that's the key to find out snake or not...
		$result = 0;
	  }
	  $min = $min+1;
	  //echo "<br>";
	  } 
	  //echo "last: ". $result."<br>";
	  
	  return $result;
};

function is_fourkind($face){
//0 is false, 1 is true

	$temp = array_count_values($face);
	$count = count($temp);
	$max = max($temp);
	//echo "count: ".count($temp)."<br>";
	//echo "max: ".max($temp);
	
	if($count==2 and $max==4){
		return $result=1;
	}else{
		return $result=0;
	}
}
function is_fullhouse($face){
//0 is false, 1 is true

	$temp = array_count_values($face);
	$count = count($temp);
	$max = max($temp);
	//echo "count: ".count($temp)."<br>";
	//echo "max: ".max($temp);
	
	if($count==2 and $max==3){
		return $result=1;
	}else{
		return $result=0;
	}
}

function is_threekind($face){
//0 is false, 1 is true

	$temp = array_count_values($face);
	$count = count($temp);
	$max = max($temp);
	//echo "count: ".count($temp)."<br>";
	//echo "max: ".max($temp);
	
	if($count==3 and $max==3){
		return $result=1;
	}else{
		return $result=0;
	}
}

function is_twopair($face){
//0 is false, 1 is true

	$temp = array_count_values($face);
	$count = count($temp);
	$max = max($temp);
	//echo "count: ".count($temp)."<br>";
	//echo "max: ".max($temp);
	
	if($count==3 and $max==2){
		return $result=1;
	}else{
		return $result=0;
	}
}

function is_onepair($face){
//0 is false, 1 is true

	$temp = array_count_values($face);
	$count = count($temp);
	$max = max($temp);
	//echo "count: ".count($temp)."<br>";
	//echo "max: ".max($temp);
	
	if($count==4){
		return $result=1;
	}else{
		return $result=0;
	}
}

function is_single($face){
//0 is false, 1 is true

	$temp = array_count_values($face);
	$count = count($temp);
	$max = max($temp);
	//echo "count: ".count($temp)."<br>";
	//echo "max: ".max($temp);
	
	if($count==5){
		return $result=1;
	}else{
		return $result=0;
	}
}

?>