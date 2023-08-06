<?php
namespace Codecademy;

function agreeOrDisagree($string1, $string2) {
  if ($string1 === $string2) {
    return "You agree!";
  } else {
    return "You disagree!";
  }
}

echo agreeOrDisagree("red", "blue");
echo "\n";
echo agreeOrDisagree("red", "red");
echo "\n";

function checkRenewalMonth($month) {
  if (date("F") !== $month) {
    return "Welcome!";
  } else {
    return "Time to renew";
  }
}

echo checkRenewalMonth("July");
echo "\n";
echo checkRenewalMonth("August");