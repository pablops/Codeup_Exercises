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
function getCardValue($array) {
  foreach($array as $key => $value){
  	if($key != 'A' && is_numeric($key)){
  		return $key;
  	} elseif($key != 'A'){
  		return 10;
  	} else{
  		return 11;
  	}
  }
}
// echo (getCardValue($deck[32])) . PHP_EOL;
// echo (getCardValue($deck[11])) . PHP_EOL;
// // get total value for a hand of cards
// // don't forget to factor in aces
// // aces can be 1 or 11 (make them 1 if total value is over 21)
// GET HAND TOTAL FUNCTION:
// function getHandTotal($hand) {
//   foreach($hand as $key => $value){
//     $count = getCardValue($hand[0]) + getCardValue($hand[1]);
//     return $count; 
//   }
// }
// END OF GET HAND TOTAL FUNCTION. 

// echo getHandTotal($deck[32], $deck[14]);

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
// echo "dealer: ";
// var_dump($dealer);
// echo "player: ";
// var_dump($player);

function winnerCheck($totalPlayer, $totalDealer){
  if ($totalDealer > $totalPlayer){
    echo "): DEALER WINS :(\n";
  } elseif ($totalDealer == $totalPlayer){
    echo "PUSH\n";
  } else {
    echo "***YOU WIN!***\n";
  }
}

function dealerHS($totalDealer){
  if($totalDealer >= 16){
    break;
  }
  else{
    //ADD A CARD TO DEALER. 
  }
}

function jackCheck(&$totalPlayer, &$totalDealer, &$deck, &$player){
  if($totalPlayer > 21){
    echo "BUST GAME OVER BUST\n";
  }
  elseif($totalPlayer == 21){
    echo "*21*YOU WIN!*21*\n";
  } elseif($totalDealer == 21) {
    echo "): DEALER WINS :(\n";
  } else {
     echo '(H)it or (S)tand? ';
        // Get array key
        $answer = trim(fgets(STDIN));;
        if($answer == 'H') {
          array_push($player, array_shift($deck));
          echo "Player Cards> " . "[" . getCardValue($player[0]) . "] [" . 
          getCardValue($player[1]) . "] [" . getCardValue($player[2]) . "]";
          $totalPlayer = $totalPlayer + getCardValue($player[2]) . PHP_EOL;
          echo "\nPlayer Total " . $totalPlayer . PHP_EOL;
          jackCheck($totalPlayer, $totalDealer, $deck, $player);
          } else {
          winnerCheck($totalPlayer, $totalDealer);
        }
  }
}

echo "\nPlayer Cards> [" . getCardValue($player[0]) . "] [" . getCardValue($player[1]) . "]";
$totalPlayer = getCardValue($player[0]) + getCardValue($player[1]);
echo "\nPlayer Total> " . $totalPlayer . PHP_EOL;
echo "\nDealer Cards> [" . getCardValue($dealer[0]) . "] [" . getCardValue($dealer[1]) . "]";
$totalDealer = getCardValue($dealer[0]) + getCardValue($dealer[1]);
echo "\nDealer Total> " . $totalDealer . PHP_EOL;
echo "total player: ";
print_r ($totalPlayer);
echo jackCheck($totalPlayer, $totalDealer, $deck, $player);








