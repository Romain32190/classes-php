<?php
require_once 'Vegetable.php';
require_once 'Cloth.php';

$vegetable = new Vegetable();
$vegetable -> set_id(11);
$vegetable -> set_price(5.0);
$vegetable -> set_name('poire');
$vegetable -> set_expiresAt(50);
$vegetable -> set_productorName('pierre');

$vegetable1 = new Vegetable();
$vegetable1 -> set_id(5);
$vegetable1 -> set_name('orange');
$vegetable1 -> set_expiresAt(20);
$vegetable1 -> set_productorName('Jean-jacques');
$vegetable1 -> set_price(2.0);

$cloth1 = new Cloth();
$cloth1 -> set_id(2);
$cloth1 -> set_name('polo');
$cloth1 -> set_price(70);
$cloth1 -> set_brand('lacoste');

$cloth2 = new Cloth();
$cloth2 -> set_id(3);
$cloth2 -> set_name('pull');
$cloth2 -> set_price(25);
$cloth2 -> set_brand('jules');

$cloth3 = new Cloth();
$cloth3 -> set_id(290);
$cloth3 -> set_name('jean');
$cloth3 -> set_price(29);
$cloth3 -> set_brand('pull & bear');



$products = [[$vegetable, $vegetable1], [$cloth1, $cloth2, $cloth3]];
?>
