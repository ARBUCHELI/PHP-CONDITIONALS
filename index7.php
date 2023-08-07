<?php
namespace Codecademy;

function ternaryCheckout($number) {
  return $number <= 12 ? "express lane" : "regular lane";
}

function ternaryVote($age) {
  return $age >= 18 ? "yes" : "no";
}

echo ternaryCheckout(13);
echo "\n";
echo ternaryCheckout(12);
echo "\n";
echo ternaryCheckout(11);
echo "\n";
echo "\n";
echo ternaryVote(18);
echo "\n";
echo ternaryVote(17);