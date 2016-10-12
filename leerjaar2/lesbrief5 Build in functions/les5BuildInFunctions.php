<h2>Opdracht 1</h2>
<?php
$name =  "Michael";
$nameLenght = strlen($name);
$random =  rand(0,$nameLenght -1);
echo $name[$random];
?>

<h2>Opdracht 2</h2>
<?php
$namen = array("Michael", "Thimo", "Sven", "Gabriel", "Gijs", "Thiery", "Leon", "Txai", "soms");
sort($namen);

$randompje = rand(0, count($namen) -1);//count starts at 1 and index at 0 so -1

echo($namen[$randompje]);
?>

<h3>Opdracht 3</h3>
<?php


$allLetters = "abcdefghijklnmopqrstuvwqyz";


for($i = 0;$i <= 11;$i++)
{
    $random2 =  rand(0, strlen($allLetters -1));
    if($i < 2)//letters
    {
        echo $allLetters[$random2];
    }
    else if($i == 2)//add -
    {
        echo  " - ";
    }
    else
    {
        echo $random2;
    }
}

?>

<h3>Opdracht 4 optellen</h3>

<?php
$appels = 10 * 0.58;
$haribo = 5 * 1.29;

echo "Vijf zakken haribo: " . $haribo . "<br>";
echo "Tien appels:" . $appels . "<br>";

$totaal = $appels + $haribo;
$exBTW = $appels + $haribo / 121 * 100;
echo "Totaal: " . $totaal . "<br>";
echo "Ex btw: " . round($exBTW, 2);
?>
