<?php

$src = [
    'ItemContract.php',
    'ItemFactory.php',
    'GildedRose.php',
    'Quality.php',
];

foreach($src as $item) {
    require_once __DIR__.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.$item;
}

$items = [
    "BaseItem.php",
    "Normal.php",
    "Sulfur.php",
    "Ticket.php",
    "Torshi.php",
];

foreach($items as $item) {
    require_once __DIR__.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'items'.DIRECTORY_SEPARATOR.$item;
}

$tests = [
    'torshi.php',
    'normal.php',
    'sulfur.php',
    'ticket.php',
];


foreach($tests as $item) {
    require_once __DIR__.DIRECTORY_SEPARATOR.'tests'.DIRECTORY_SEPARATOR.$item;
}