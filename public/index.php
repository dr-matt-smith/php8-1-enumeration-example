<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Mattsmithdev\Suit;

$card1Suit = Suit::SPADES;

// use ->name to get String version of enum case
print "card 1 has suit = " . $card1Suit->name;
print "\n";
