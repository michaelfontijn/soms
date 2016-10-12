<?php
include("Recept.php");

$receptje = new Recept();

$receptenArray =  $receptje->getRecepten();
print_r($receptenArray);


$ingredientenArray = $receptje->getAlIngredienten($receptenArray[6]);
print_r($ingredientenArray);