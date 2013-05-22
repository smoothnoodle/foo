<?php
$face = array("2","3","5","6","7","8","9");
//$face = array("10","3","4","7","6","5","1");
//logic, check for the first three index is it an snake?

function is_snake($face){
//return 0=false, 1=true 
"length: ".$arrlength=count($face);

	sort($face);
	//print_r($face);
	for($y=0;$y<3;$y++){
	$min=$face[$y];
		for($x=0;$x<$arrlength;$x++){
		  echo "min: ".$min."<br>";
		  //echo $face[$x];
		  if($face[$x]==$min){
			//echo "true";
		  }else{
			//echo "false";//return false; that's the key to find out snake or not...
			//$result = 0;
		  }
		  $min = $min+1;
		  //echo "<br>";
		  } 
	};

	  //return $result;
};

echo is_snake($face);

?>