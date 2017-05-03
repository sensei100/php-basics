<?php

for ($i = 0; $i <= 10; $i++) {

    echo $i."<br>";

}

echo "<br><br>";

for ($i = 2; $i <= 30; $i = $i + 2) {

    echo $i."<br>";

}

echo "<br><br>";

for ($i = 10; $i >= 0; $i--) {

    echo $i."<br>";

}

 $family = array("Jen", "Larry", "Jackson", "Olivia", "Oscar");

echo "<br><br>";

for ($i = 0; $i < sizeof($family); $i++) {

    echo $family[$i]."<br>";

}

echo "<br><br>";

foreach ($family as $key => $value) {

    $value = $value." Anton";
  
    echo "Array item".$key." is ".$value."<br>";

}

print_r($family);



?>