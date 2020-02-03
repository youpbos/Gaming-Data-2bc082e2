<?php
$ary = array(
    array($a1 ="Call of Duty","Shooter",$a = 59.95), 
    array($a2 ="Rocket League","Sport",$b = 19.95), 
    array($a3 = "Assassins Creed","RP",$c = 49.95));

print_r($ary);

$ant = $a + $b + $c;
$gem = $ant / 3;
$leng = strlen($a1) + strlen($a2) + strlen($a3);
$lengGem = $leng / 3;
var_dump($ary);


echo("------------------------------------------------").PHP_EOL;
echo("Gemiddelde prijs: €");
echo number_format(round($gem , 2),2).PHP_EOL;
echo("Gemiddelde lengte van de titel: " .number_format(round($lengGem , 0),0) . " karakters");
?>