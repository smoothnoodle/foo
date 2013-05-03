<?php
$face = array("3","4","5","6","7");
$suit = array("4","4","4","4","4");

function is_straightflush($face,$suit){
	if (is_snake($face)==1 and is_flush($suit)==1){
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

function is_snake($face){
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

echo is_straightflush($face,$suit);
?>