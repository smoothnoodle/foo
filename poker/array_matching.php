<?php

//compare algorithm, key is to look for patterns
//Straigh flush > four of the kinds > Full house > flush > straight > three of the kind > Two pair > One Pair > high card
//every patterns return true or false, is it a snake!?? true

//problem1, create players.. now only two players allow, what happen if I want to add up to 6 players? multi-dimensional array, is one of the answer
//problem2, how to map the card array value to the name of the card, create another assoc array, map 13.4 to King_heart.. match 13.4 to the index

// sort your cards from smallest to biggest
// look for straight flush, card with same suit plus in sequence(oK)
// look for flush, card with same suit(0k)
// look for snake, all five card in sequence(ok)
// look for four of the kinds(0K)
// look for three cards of the kinds(0k)
// look for full house(0k)
// look for pairs
//if all else compare biggest number of the array win

// double array approach?? good to know
// assocated approach: 1.4 => "1 Spade", would not work because replace the index 0 to whatever name u want.. because of that u can't use for loop

//Straight Flush
//the number have to be in sequence: -1 or +1 5 times, if sorted that will be a lot easir, start from the smallest number and +1 
//the suit.decimal has to be the same: return the same .decimal number 5 times, pick any decimal and compare it with the next 4 decimal, if it return 4.. is a winner
//highest face win
//just compare the highest number
//Array ( [0] => 14.4 [1] => 13.4 [2] => 12.4 [3] => 11.4 [4] => 10.4 ) 

//Array ( [0] => 11.2 [1] => 5.2 [2] => 10.1 [3] => 10.4 [4] => 6.3 ) 

//If number is in sequence but suit, is snake
//if all the suit are the same but not sequence is flush

//else 
//Four of the kind: compare a to b,c,d,e, then b to a,c,d,e, only need to do twice, return 3 yes
// 3,3,3,3,5  , 1,7,7,7,7

//three of the kind: a to b,c,d,e then b to a,c,d,e then c to a,b,d,e return 2 yes
// 3,3,3,4,5 - a and c, if the first two number are the same.. do test full house
//T,T,F,F, T,T,F,F
//3,4,4,4,5 
//2,3,4,4,4 - first two number is not the same can't be fullhouse
//How can tell the difference between 3 of the kinds and full house? the first two cards are same then test the last three cards are they the same
//or the last two cards are the same then test the first card are the same

//full house: 
//2,2,4,4,4 
//T,F,F,F; F,F,T,T - a and c
//1,1,1,3,3 - a and d
//T,T,F,F; F,F,F,T

//look for double pair
//1,1,2,2,4  , 3,4,4,5,5,  1,1,3,5,5

//look for one pair
//1,1,3,4,5 , 2,3,3,4,5 , 3,4,5,5,6 , 3,4,5,6,6 

//look for the highest card
//max(player); 

$player1 = array("1.4", "3.4", "2.4","5.4","4.4");
$face1 = array("1","2","3","4","5");
$suit1 = array("4","4","5","4","4");
if(count(array_unique($suit1)) == 1){
	echo "true";
}else{
	echo "false";
}
sort($player1);
//print_r($player1);

echo $player1[3];



?>