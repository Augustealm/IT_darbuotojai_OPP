<?php
require "vendor/autoload.php";
use MYAPP\ivadas;
use MYAPP\child;
use MYAPP\Visi_darbuotojai;
use MYAPP\Testuotojai;
use MYAPP\Programuotojai;
use MYAPP\Vadovai;

$iv = new child("IVADAS");
echo $iv->intro();
echo "<br>";


$testuotojas1 = new Testuotojai('Petras', 'Petrinskas', 980, 'automatinis');
$programuotojas1 = new Programuotojai('Algis', 'Alginskas', 1400, 'vyriausias programuotojas', 'PHP');
$vadovas = new Vadovai('Jone', 'Jonaitiene', 2100, 510);


echo $testuotojas1->getVardas(). " ". $testuotojas1->getPavarde(). " ". $testuotojas1->getTestavimoTipas(). " ";
$testuotojas1->setVardas('Povilas');
$testuotojas1->setPavarde('Lukosius');
$testuotojas1->setTestavimoTipas ('rankinis');
echo $testuotojas1->getVardas(). " ". $testuotojas1->getPavarde(). " ". $testuotojas1->getTestavimoTipas(). " ";

echo $programuotojas1->getVardas(). " ". $programuotojas1->getPavarde(). " ". $programuotojas1->getPareigos() . " ";
$programuotojas1-> setVardas('Dalia');
$programuotojas1->setPavarde('Daliene');
$programuotojas1->setPareigos('vyriausia programuoja');

echo $programuotojas1->getVardas() . " ". $programuotojas1->getPavarde() . " ". $programuotojas1->getPareigos() . " ";


