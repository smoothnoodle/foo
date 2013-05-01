<?php
echo "<b>Associative array</b><br>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";

echo "<br><br>";
echo "<b>Basic Array</b><br>";
$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

echo "<br><br>";

echo "<b>Array in for loop</b><br>";
$cars=array("Volvo","BMW","Toyota");
$arrlength=count($cars);

for($x=0;$x<$arrlength;$x++)
  {
  echo $cars[$x];
  echo "<br>";
  }

 echo "<br>";

 echo "<b>Associative array in foreach loop</b><br>";
 $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

foreach($age as $x=>$x_value)
  {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
  }
  
  echo "<br>";
  
echo "<b>array_combine()</b><br>";
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print_r($c);

echo "<br><br>";
echo "<b>array_chunk()</b><br>";
#split an array
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,2));

echo "<br><br>";
echo "<b>array_rand()</b><br>";
$a=array("a"=>"Dog","b"=>"Cat","c"=>"Horse");
print_r(array_rand($a,1));

echo "<br><br>";
echo "<b>current()</b><br>";
$people = array("Joe", "Glenn", "Cleveland", "Peter");
echo current($people) . "<br />";

echo "<br>";
echo "<b>search()</b><br>";
$a=array("3","2","7","4");
echo max($a);

?>