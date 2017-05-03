<?php

$myArray = array("Jen", "Larry", "Jackson", "Olivia", "Oscar");

$myArray[] = "Katie";

print_r($myArray);

echo $myArray[1];

echo "<br><br>";

$anotherArray[0] = "pizza";

$anotherArray[1] = "hotdogs";

$anotherArray["myFavorite"] = "coffee ";

print_r($anotherArray);

echo "<br><br>";

$thirdArray = array("France" => "French", "USA" => "English", "Germany" => "German");

unset($thirdArray["France"]);

print_r($thirdArray);

echo sizeof($thirdArray);

?>