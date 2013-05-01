<?php
$face1 = array("3","4","5","6","7");

function is_snake($face1){
//return 0=false, 1=true 
	$arrlength=count($face1);
	$min = min($face1);
	$anwser = 1;
	
	//echo "first: ". $anwser."<br>";
	
	for($x=0;$x<$arrlength;$x++)
	  {
	  echo "min: ".$min."<br>";
	  echo $face1[$x];
	  if($face1[$x]==$min){
		//echo "true";
	  }else{
		//echo "false";//return false; that's the key to find out snake or not...
		$anwser = 0;
	  }
	  $min = $min+1;
	  echo "<br>";
	  } 
	  //echo "last: ". $anwser."<br>";
	  
	  return $anwser;
};

echo is_snake($face1);

?>