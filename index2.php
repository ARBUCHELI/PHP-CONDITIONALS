<?php
namespace Codecademy;

function chooseCheckoutLane($number_of_items) {
  if ($number_of_items <= 12) {
    return "express lane";
  } else {
    return "regular lane";
  }
}

function canIVote($age) {
  if ($age >= 18) {
    return "yes";
  } else {
    return "no";
  }
}

echo chooseCheckoutLane(12);
echo "\n";
echo chooseCheckoutLane(11);
echo "\n";
echo chooseCheckoutLane(13);
echo "\n";
echo canIVote(18);
echo "\n";
echo canIVote(19);
echo "\n";
echo canIVote(17);