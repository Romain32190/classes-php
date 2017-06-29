<?php
require_once 'Vegetable.php';
require_once 'Cloth.php';

$vegetable1 = new Vegetable();
$vegetable2 = new Vegetable();
$cloth1 = new Cloth();
$cloth2 = new Cloth();
$cloth3 = new Cloth();


$products = [[$vegetable1, $vegetable2], [$cloth1, $cloth2, $cloth3]];
?>
