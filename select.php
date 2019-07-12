<?php
$startSelect = microtime(true);
$querySelect = $conn->query("SELECT * FROM `select_produkt`;");
$finishSelect = microtime(true);
$durationSelect = $finishSelect - $startSelect;


$startStats = microtime(true);
$querySelectStats = $conn->query("SELECT * FROM `stats`;");
$finishStats = microtime(true);
$durationStats = $finishStats - $startStats;

$startStats2 = microtime(true);
$querySelectStats2 = $conn->query("SELECT * FROM `statystyki_biezacego_klienta`;");
$finishStats2 = microtime(true);
$durationStats2 = $finishStats2 - $startStats2;


$querySelectOptions = $conn->query("SELECT * FROM `kategoria`;");

$querySelectRating = $conn->query("SELECT * FROM `ocena`;");

$startAgr1 = microtime(true);
$querySelectAgr1 = $conn->query("SELECT * FROM `cena_produktow_w_danej_kategorii`;");
$finishAgr1 = microtime(true);
$durationAgr1 = $finishAgr1 - $startAgr1;

$startAgr2 = microtime(true);
$querySelectAgr2 = $conn->query("SELECT * FROM `liczba_produktow_w_danej_ocenie`;");
$finishAgr2 = microtime(true);
$durationAgr2 = $finishAgr2 - $startAgr2;

$startAgr3 = microtime(true);
$querySelectAgr3 = $conn->query("SELECT * FROM `liczba_produktow_z_danej_kategorii`;");
$finishAgr3 = microtime(true);
$durationAgr3 = $finishAgr3 - $startAgr3;


$startAgr4 = microtime(true);
$querySelectAgr4 = $conn->query("SELECT * FROM `minimalna_cena_produktow`;");
$finishAgr4 = microtime(true);
$durationAgr4 = $finishAgr4 - $startAgr4;

$startAgr5 = microtime(true);
$querySelectAgr5 = $conn->query("SELECT * FROM `srednia_cena_produktow`;");
$finishAgr5 = microtime(true);
$durationAgr5 = $finishAgr5 - $startAgr5;