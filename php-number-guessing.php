<?php

$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "I'm going to think of numbers between 1 and 10 (inclusive). Do you think you can guess correctly?\n";

function guessNumber() {
  global $guess_high, $guess_low, $correct_guesses, $play_count;
  $play_count++;

  $number = rand(1, 10);
  echo "\n Make your guess...\n";
  $response = intval(readline(">> "));

  echo "You are currently in the round $play_count\n";
  echo "\n";
  echo "The number I thought about was $number\n";
  echo "\n";
  echo "The number you guessed was $response\n";
  echo "\n";

  if ($response == $number) {
    $correct_guesses++;
  } else if ($response > $number) {
    $guess_high++;
  } else {
    $guess_low++;
  }
}

guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
 
   $percent_correct = ($correct_guesses/$play_count) * 100;

   echo "You guesses correctly $percent_correct per cent of the times\n";

   if ($guess_high > $guess_low) {
     echo "When you guessed wrong, you tended to guess high.\n";
   }
   if ($guess_low > $guess_high) {
     echo "When you guessed wrong, you tended to guess low.\n";
   }