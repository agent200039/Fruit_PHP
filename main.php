<?php
    require_once('Peach.php');
    require_once('Strawberry.php');

    $peachMax = $peaches->maxPriceValue();
    $peachMin = $peaches->minPriceValue();
    $peachAverage = $peaches->averagePrice();

    $strawberryMax = $strawberries->maxPriceValue();
    $strawberryMin = $strawberries->minPriceValue();
    $strawberryAverage = $strawberries->averagePrice();

    require_once('View.php');
?>
