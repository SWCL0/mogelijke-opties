<?php

$budget = 100;
$worst = 5;
$hamburgers = 10;
$frikandellen = 15;

for ($quantity_worst = 1; $quantity_worst * $worst <= $budget; $quantity_worst++) {
    for ($quantity_hamburgers = 1; $quantity_hamburgers * $hamburgers <= $budget - $quantity_worst * $worst; $quantity_hamburgers++) {
        for ($quantity_frikandellen = 1; $quantity_frikandellen * $frikandellen <= $budget - $quantity_worst * $worst - $quantity_hamburgers * $hamburgers; $quantity_frikandellen++) {

            $totale_kost = $quantity_worst * $worst + $quantity_hamburgers * $hamburgers + $quantity_frikandellen * $frikandellen;

            if ($totale_kost == $budget) {
                $aantalWorst = $quantity_worst * 6;
                $aantalHamburgers = $quantity_hamburgers * 20;
                $aantalFrikandellen = $quantity_frikandellen * 25;
                echo "Buy $quantity_worst Worst verpakkingen ($aantalWorst Worsten), $quantity_hamburgers Hamburger verpakkingen ($aantalHamburgers Hamburgers) and $quantity_frikandellen Frikandel verpakkingen ($aantalFrikandellen Frikandellen). Total cost: $totale_kost" . PHP_EOL;
                echo PHP_EOL;
            }
        }
    }
}


?>