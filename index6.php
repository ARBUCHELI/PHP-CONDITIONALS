<?php
namespace Codecademy;

function returnSeason($month) {
  switch ($month) {
    case "December":
    case "January":
    case "February":
      return "winter";
      break;
    case "March":
    case "April":
    case "May":
      return "spring";
      break;
    case "June":
    case "July":
    case "August":
      return "summer";
      break;
    case "September":
    case "October":
    case "November":
      return "fall";
      break;
  }
}

echo returnSeason("December");
echo "\n";
echo returnSeason("March");
echo "\n";
echo returnSeason("June");
echo "\n";
echo returnSeason("September");