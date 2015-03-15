<?php
$suits = ['C', 'H', 'S', 'D'];
$cards = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];

// card values should be "VALUE SUIT". ex: "7 H"
// make sure to shuffle the deck before returning it
function buildDeck($suits, $cards) {
$deck = [];
  foreach($suits as $suit){
  	foreach($cards as $card){
  		$combo = [$card => $suit];
  		// print_r($combo);
  		array_push($deck, $combo);
  	}
  }
  // print_r($deck);
  // print_r($deck)[3];
  shuffle($deck);
  return $deck;
}
$deck = buildDeck($suits, $cards);
// print_r($deck);
// determine if a card is an ace
// return true for ace, false for anything else
function cardIsAce($thisCard) {
	foreach($thisCard as $key => $card) {
		if($key == 'A'){
			return true;
		} else {
			return false;
		}
	}
}

// print_r($deck[3]);

// var_dump(cardIsAce($deck[39]));
// var_dump(array_keys($deck[39]));
// print_r($deck[39]);
// var_dump (array_keys($deck[39]));
// TO PRINT WHOLE DECK:
// print_r($deck);
// determine the value of an individual card (string)
// aces are worth 11
function getCardValue($card) {
  foreach($card as $key => $value){
  	if($key != 'A' && is_numeric($key)){
  		return $key;
  	} elseif($key != 'A'){
  		return 10;
  	} else{
  		return 11;
  	}
  }
}

echo (getCardValue($deck[32])) . PHP_EOL;
echo (getCardValue($deck[11])) . PHP_EOL;
// // get total value for a hand of cards
// // don't forget to factor in aces
// // aces can be 1 or 11 (make them 1 if total value is over 21)
function getHandTotal($hand) {
  $count = 0;
  foreach($hand as $card){
  	$count = $count + getCardValue($hand);
  }
  return $count;
}

echo getHandTotal($deck[32], $deck[14]);

// build the deck of cards
$deck = buildDeck($suits, $cards);
// // initialize a dealer and player hand
$dealer = [];
$player = [];
// // draw a card from the deck into a hand
// // pass by reference (both hand and deck passed in are modified)
function drawCards(&$deck, &$dealer, &$player) {
	// dealer and player each draw two cards
  array_push($dealer, array_shift($deck));
  array_push($dealer, array_shift($deck));
  array_push($player, array_shift($deck));
  array_push($player, array_shift($deck));
  return($player);
  return($dealer);
}

drawCards($deck, $dealer, $player);
echo "dealer: ";
var_dump($dealer);
echo "player: ";
var_dump($player);

echo "first card is " . getCardValue($player[0]) . " ";
// echo "second card is " . getCardValue($deck[1]) . " ";
// echo "value of hand is " . $hand . PHP_EOL;

// // print out a hand of cards
// // name is the name of the player
// // hidden is to initially show only first card of hand (for dealer)
// // output should look like this:
// // Dealer: [4 C] [???] Total: ???
// // or:
// PROBLEM STARTS HERE:
// // Player: [J D] [2 D] Total: 12
// function echoHand($hand, $name, $hidden = false) {
//   echo "$name: " ;
//   echo $deck[0];
// }

// echoHand($hand, "PABLO");

// // echo the dealer hand, only showing the first card
// // todo
// // echo the player hand
// // todo
// // allow player to "(H)it or (S)tay?" till they bust (exceed 21) or stay
// while (/* todo */) {
//   // todo
// }
// // show the dealer's hand (all cards)
// // todo
// // todo (all comments below)
// // at this point, if the player has more than 21, tell them they busted
// // otherwise, if they have 21, tell them they won (regardless of dealer hand)
// // if neither of the above are true, then the dealer needs to draw more cards
// // dealer draws until their hand has a value of at least 17
// // show the dealer hand each time they draw a card
// // finally, we can check and see who won
// // by this point, if dealer has busted, then player automatically wins
// // if player and dealer tie, it is a "push"