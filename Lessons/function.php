<?php
//in a function, array and value won't change unless u return it
$card = array("1.4","2.4","3.4","4.4","5.4","6.4","7.4","8.4","9.4","10.4","11.4","12.4","13.4","14.4","1.3","2.3","3.3","4.3","5.3","6.3","7.3","8.3","9.3","10.3","11.3","12.3","13.3","14.3","1.2","2.2","3.2","4.2","5.2","6.2","7.2","8.2","9.2","10.2","11.2","12.2","13.2","14.2","1.1","2.1","3.1","4.1","5.1","6.1","7.1","8.1","9.1","10.1","11.1","12.1","13.1","14.1");
$community =array();

shuffle($card);
 
$arrlength=count($card);
for($x=0;$x<$arrlength;$x++)
  {
  echo $card[$x];
  echo "<br>";
}
echo "<br>";

function test($card, $community){
$community = array_shift($card);//miss a loop to do $community[0]
return $community;
};

$community = test($card,$community);
//test($card,$community);
echo "<br><br>Community<br><br>";

//print_r ($community);

$arrlength=count($community);
for($x=0;$x<$arrlength;$x++){//why this doesn't show demical?? would be a problem later!
  echo $community[0];
  echo "<br>";
}

$arrlength=count($card);
for($x=0;$x<$arrlength;$x++)
  {
  echo $card[$x];
  echo "<br>";
}
echo "<br>";

?>