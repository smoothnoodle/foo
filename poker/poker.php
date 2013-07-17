<?php 

include "function.php";
//base on Texas hold'em rulez
//create three arrays: 1 array for the deck, 2 array for each player
//populate 56 cards into card array 
//shulff the card array 
//pop one card from the top of the array to player1 then to player2 untill both player array are full(max two cards each)
//compare both players' array to each other to see who won

$num_of_player = $_POST["num"];

$card = array("1.4","2.4","3.4","4.4","5.4","6.4","7.4","8.4","9.4","10.4","11.4","12.4","13.4","14.4","1.3","2.3","3.3","4.3","5.3","6.3","7.3","8.3","9.3","10.3","11.3","12.3","13.3","14.3","1.2","2.2","3.2","4.2","5.2","6.2","7.2","8.2","9.2","10.2","11.2","12.2","13.2","14.2","1.1","2.1","3.1","4.1","5.1","6.1","7.1","8.1","9.1","10.1","11.1","12.1","13.1","14.1");
//$name = array("1.4"=>"1_Spade","2.4"=>"2_Spade","3.4"=>"3_Spade","4.4"=>"4_Spade","5.4"=>"5_Spade","6.4"=>"6_Spade","7.4"=>"7_Spade","8.4"=>"8_Spade","9.4"=>"9_Spade","10.4"=>"10_Spade","11.4"=>"Jack_Spade","12.4"=>"Queen_Spade","13.4"=>"King_Spade","14.4"=>"Ace_Spade","1.3"=>"1_Heart","2.3"=>"2_Heart","3.3"=>"3_Heart","4.3"=>"4_Heart","5.3"=>"5_Heart","6.3"=>"6_Heart","7.3"=>"7","8.3"=>"8_Heart","9.3"=>"9_Heart","10.3"=>"10_Heart","11.3"=>"Jack_Heart","12.3"=>"Queen_Heart","13.3"=>"King_Heart","14.3"=>"Ace_Heart","1.2"=>"1_Club","2.2"=>"2_Club","3.2"=>"3_Club","4.2"=>"4_Club","5.2"=>"5_Club","6.2"=>"6_Club","7.2"=>"7_Club","8.2"=>"8_Club","9.2"=>"9_Club","10.2"=>"10_Club","11.2"=>"Jack_Club","12.2"=>"Queen_Club","13.2"=>"King_Club","14.2"=>"Ace_Club","1.1"=>"1_Diamond","2.1"=>"2_Diamond","3.1"=>"3_Diamond","4.1"=>"4_Diamond","5.1"=>"5_Diamond","6.1"=>"6_Diamond","7.1"=>"7_Diamond","8.1"=>"8_Diamond","9.1"=>"9_Diamond","10.1"=>"10_Diamond","11.1"=>"Jack_Diamond","12.1"=>"Queen_Diamond","13.1"=>"King_Diamond","14.1"=>"Ace_Diamond");
$community = array();//dealer's card
$players = array();//player's card
$play_card = array();//dealer plus player card 

shuffle($card);

//debug only show the deck's card
$arrlength=count($card);
for($x=0;$x<$arrlength;$x++){
  echo $card[$x];
  echo "<br>";
}

//deal two down car
$result=down_card($card,$num_of_player);
$players=$result[0];
$card=$result[1];

//debug only show all the player's card
echo "<br>Players; card<br><br>";
for($x=0;$x<$num_of_player;$x++){
print_r ($players[$x]);
echo "<br><br>";
}

echo "<br>burn one card<br>";
$card = burn_card($card);//burn a card

$result=flop($card, $community);
$community=$result[0];
$card=$result[1];

echo "<br>community cards<br>";
print_r ($community);
echo "<br><br>";

echo "<br>burn one card<br>";
$card = burn_card($card);//burn a card

$result=turn($card, $community);
$community=$result[0];
$card=$result[1];

echo "<br>community cards after turn<br>";
print_r ($community);
echo "<br><br>";

echo "<br>burn one card<br>";
$card = burn_card($card);//burn a card

$result=river($card, $community);
$community=$result[0];
$card=$result[1];

echo "<br>community cards after river<br>";
print_r ($community);
echo "<br><br>";


$play_card = player_community($players, $community);

$test = face_split($play_card[1]);
$test2 = suit_split($play_card[1]);
echo "<br>play card<br>";
print_r($play_card[1]);
echo "<br>face Split<br>";
print_r($test);
echo "<br>suit Split<br>";
print_r($test2);





/*
echo "<br><br>";
echo "<b>Player1</b><br>";
echo "hightest card: ".max($player1)."<br>";
//print_r ($player1); 
sort($player1);
foreach($player1 as $v){
	echo $name[$v]." || ";
}
echo "<br><br>hand: ".$hand=hand($player1)."<br>";
echo display_hand($hand);

echo "<br><br>";
echo "<b>Player2</b><br>";
echo "hightest card: ".max($player2)."<br>";
//print_r ($player2);
sort($player2);
foreach($player2 as $v){
	echo $name[$v]." || ";
}
echo "<br><br>hand: ".$hand2=hand($player2)."<br>";
echo display_hand($hand2);
*/
//who win, if the hand weight is the same then compare the highest card... snake, flush, straight flush(royal)
//four, three, pair need to compare max pairs, three, four




echo "<br><br>";
//print_r ($card); 
$arrlength=count($card);
for($x=0;$x<$arrlength;$x++){
  echo $card[$x];
  echo "<br>";
}

?>