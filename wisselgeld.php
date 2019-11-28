<?php
$array = $argv[1];
$input = round($array, 2);
$valueMoney = array(
    50,
    20,
    10,
    5,
    2,
    1,
    0.50,
    0.20,
    0.10,
    0.05
    );
$money = round($input / 0.05) * 0.05;

if(!$money == 0){
    foreach($valueMoney as $valueMoney2){
        $money = round($money, 2);
        $floorCheck = floor($money / $valueMoney2);
        if(!$floorCheck == 0){
            echo "$floorCheck x $valueMoney2".PHP_EOL;
            $money = $money - ($floorCheck * $valueMoney2);
        }
    }
exit;
}

else {
    exit ("Geen wissel geld.");
}