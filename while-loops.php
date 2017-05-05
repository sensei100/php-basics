<?php

  $i = 0;

  while ($i < 10) {

    echo  $i."<br>";

    $i++;
  }

  echo "<br><br>";

  $i = 1;

  while ($i <= 10) {

    echo  $i*5;

    echo "<br>";

    $i++;
  }

  echo "<br><br>";

  $family = array("Jen", "Larry", "Jackson", "Olivia", "Oscar");

  $i = 0;

  while ($i < sizeof($family)) {

    echo $family[$i]."<br>";

    $i++;
  }

?>