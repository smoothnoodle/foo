<?php
//$face = array("1","3","4","5","6","7","10");
$face = array("10","3","4","7","6","5","1");


function is_snake($face){
//return 0=false, 1=true 
	echo "length: ".$arrlength=count($face);

	$result = 1;
	
	sort($face);
	print_r($face);
	
	for($x=0;$x<$arrlength;$x++)
	  {

	  //echo $face[$x];
	  if($face[$x]==$min){//
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

echo is_snake($face);

?>