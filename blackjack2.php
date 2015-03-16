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
  		array_push($deck, $combo);
  	}
  }
  shuffle($deck);
  return $deck;
}

$deck = buildDeck($suits, $cards);

function cardIsAce($thisCard) {
	foreach($thisCard as $key => $card) {
		if($key == 'A'){
			return true;
		} else {
			return false;
		}
	}
}

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

function handValue($player){
$hand = 0;
  foreach($player as $key => $value){
    $hand += getCardValue($value);
  }
return $hand;
}

$deck = buildDeck($suits, $cards);
// // initialize a dealer and player hand
$dealer = [];
$player = [];

function drawCard(&$player, &$deck){
  array_push($player, array_shift($deck));
}

// drawCards($deck, $dealer, $player);
drawCard($player, $deck);
drawCard($dealer, $deck);
drawCard($player, $deck);
drawCard($dealer, $deck);

function winnerCheck(&$totalPlayer, &$totalDealer){
  if ($totalDealer > $totalPlayer && $totalDealer < 22){
    echo "): DEALER WINS with $totalDealer :(\n";
    // echo "DEALER TOTAL-> $totalDealer\n";
    // echo "PLAYER TOTAL-> $totalPlayer\n";
  } elseif ($totalDealer == $totalPlayer){
    echo "PUSH\n $totalPlayer & $totalDealer";
  } elseif ($totalDealer > 21){
    echo "DEALER BUST\nwith $totalDealer 
    ***YOU WIN!***\n";
  } elseif ($totalPlayer > $totalDealer && $totalPlayer < 22) {
    echo "\n***YOU WIN!***\n";
    echo "DEALER TOTAL --> $totalDealer\nPLAYER TOTAL --> $totalPlayer\n";
  } else {
    echo "unaccounted scenario";
    echo "PLAYER TOTAL IS: $totalPlayer";
    echo "DEALER TOTAL IS: $totalDealer";
  }
}


function dealerCheck(&$totalDealer, &$dealer, &$deck, &$totalPlayer){
  if ($totalDealer < 17){
    do{
      drawCard($dealer, $deck);
      echo "Dealer Cards> " . "[" . getCardValue($dealer[0]) . "] [" . 
          getCardValue($dealer[1]) . "] [" . getCardValue($dealer[2]) . "]";
      $totalDealer = handValue($dealer);
    } while ($totalDealer < 17);
  winnerCheck($totalPlayer, $totalDealer);      
  } else {
    winnerCheck($totalPlayer, $totalDealer);
  }
}

function jackCheck(&$totalPlayer, &$totalDealer, &$deck, &$player, &$dealer){
  if($totalPlayer > 21){
    echo "BUST GAME OVER BUST\n";
  }
  elseif($totalPlayer == 21){
    echo "\n*21*YOU WIN!*21*\n";
  } elseif($totalDealer == 21) {
    echo "): DEALER WINS :(\nDEALER TOTAL: $totalDealer";
  } else {
     echo '(H)it or (S)tand? ';
        // Get array key
        $answer = trim(fgets(STDIN));;
        if($answer == 'H') {
          array_push($player, array_shift($deck));
          echo "Player Cards> " . "[" . getCardValue($player[0]) . "] [" . 
          getCardValue($player[1]) . "] [" . getCardValue($player[2]) . "]";
          $totalPlayer = $totalPlayer + getCardValue($player[2]);
          echo "\nPlayer Total " . $totalPlayer . PHP_EOL;
          dealerCheck($totalDealer, $dealer, $deck, $totalPlayer);
          } else {
          dealerCheck($totalDealer, $dealer, $deck, $totalPlayer);
          jackCheck($totalPlayer, $totalDealer, $deck, $player, $dealer);
          winnerCheck($totalPlayer, $totalDealer);
        }
  }
}

print_r($deck);

echo "\nPlayer Cards> [" . getCardValue($player[0]) . "] [" . getCardValue($player[1]) . "]";
$totalPlayer = getCardValue($player[0]) + getCardValue($player[1]);
echo "\nPlayer Total> " . $totalPlayer . PHP_EOL;
echo "\nDealer Cards> [" . getCardValue($dealer[0]) . "] [???]\n";
$totalDealer = getCardValue($dealer[0]) + getCardValue($dealer[1]);
echo jackCheck($totalPlayer, $totalDealer, $deck, $player, $dealer);








