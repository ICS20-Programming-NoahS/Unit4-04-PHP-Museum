<?php

// Determines what movie the user is allowed to watch based on their age

// Gets the user's age 
$userAge = $_POST["user-age"];
$select = $_POST["days"];
$dayOfWeek = $select;

if ($userAge < 5 || $userAge > 95) {
    echo "You get in for free! Enjoy the museum!";
  }

  else if (($userAge > 12 && $userAge < 21) || ($dayOfWeek == "tuesday" || $dayOfWeek == "thursday")) {
    echo "You get a discount! Enjoy the museum!";
  }

  else {
    echo "Please pay full price. Enjoy the museum!";
  }
?>
