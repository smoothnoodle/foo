<?php 
//create three arrays: 1 array for the deck, 2 array for each player
//populate 56 cards into card array 
//shulff the card array 
//pop one card from the top of the array to player1 then to player2 untill both player array are full(max five cards each)
//compare both players' array to each other to see who won

$card1 = array("1","2","3","4","5","6","7","8","9","10","jack","queen","king","ace");
#double array approach 

//1.4 = 1_spade, 14.1 = Ace_diamond
//$card2 = array("1_spade","2_spade","3_spade","4_spade","5_spade","6_spade","7_spade","8_spade","9_spade","10_spade","jack_spade","queen_spade","king_spade","ace_spade","1_heart","2_heart","3_heart","4_heart","5_heart","6_heart","7_heart","8_heart","9_heart","10_heart","jack_heart","queen_heart","king_heart","ace_heart","1_club","2_club","3_club","4_club","5_club","6_club","7_club","8_club","9_club","10_club","jack_club","queen_club","king_club","ace_club","1_diamond","2_diamond","3_diamond","4_diamond","5_diamond","6_diamond","7_diamond","8_diamond","9_diamond","10_diamond","jack_diamond","queen_diamond","king_diamond","ace_diamond");
$card2 = array("1.4","2.4","3.4","4.4","5.4","6.4","7.4","8.4","9.4","10.4","11.4","12.4","13.4","14.4","1.3","2.3","3.3","4.3","5.3","6.3","7.3","8.3","9.3","10.3","11.3","12.3","13.3","14.3","1.2","2.2","3.2","4.2","5.2","6.2","7.2","8.2","9.2","10.2","11.2","12.2","13.2","14.2","1.1","2.1","3.1","4.1","5.1","6.1","7.1","8.1","9.1","10.1","11.1","12.1","13.1","14.1");
#single array approach use string mipl

$player1 = array();
$player2 = array();

//sort($card2);
shuffle($card2);
 
echo "<br><b>card</b><br>";
//echo sizeof($card2);

$arrlength=count($card2);

for($x=0;$x<$arrlength;$x++)
  {
  echo $card2[$x];
  echo "<br>";
  }
 
for($x=0;$x<5;$x++)
{
	$player1[] = array_shift($card2);
	$player2[] = array_shift($card2);
	//$face2[] = substr($card2[$x], 0, -2);
}

sort($player1);
sort($player2);
//sort($face1);
//sort($face2);

echo "<br><br>";
echo "<b>Player1</b><br>";
echo "hightest card: ".max($player1)."<br>";
print_r ($player1); 

echo "<br><br>";
echo "<b>Player2</b><br>";
echo "hightest card: ".max($player2)."<br>";
print_r ($player2); 

echo "<br><br>";
print_r ($card2); 

echo "<br><br>face1_array<br>";
print_r ($face1); 

?>