<?php
function sterrenBeeld($geboorteDag,$geboorteMaand )
{

    switch($geboorteMaand)
    {
        case 1:
            if ($geboorteDag > 21) return "Waterman";
            else return "Steenbok";
        case 2:
            if ($geboorteDag > 20) return "Vissen";
            else return "Waterman";
        case 3:
            if ($geboorteDag > 21) return "Ram";
            else return "Vissen";
        case 4:
            if ($geboorteDag > 21) return "Stier";
            else return "Ram";
        case 5:
            if ($geboorteDag > 22) return "Tweelingen";
            else return "Stier";
        case 6:
            if ($geboorteDag > 22) return "Kreeft";
            else return "Tweelingen";
        case 7:
            if ($geboorteDag > 24) return "Leeuw";
            else return "Kreeft";
        case 8:
            if ($geboorteDag > 24) return "Maagd";
            else return "Leeuw";
        case 9:
            if ($geboorteDag > 24) return "Weegschaal";
            else return "Maagd";
        case 10:
            if ($geboorteDag > 24) return "Schorpioen";
            else return "Weegschaal";
        case 11:
            if ($geboorteDag > 23) return "Boogschutter";
            else return "Schorpioen";
        case 12:
            if ($geboorteDag > 23) return "Steenbok";
            else return "Boogschutter";
    }

return "sterrenbeeld is stuk :D";

}

function reverseString($stringToReverse)
{
$stringlength = strlen($stringToReverse);
$temp = "";

    for($i = $stringlength;$i >= 0; $i--)
    {
        $temp = $temp . $stringToReverse[$i -1];
    }
    $temp = strtolower($temp);
    return $temp;
}





echo "Opdracht 1 sterrenbeeld";
echo "Sterrenbeeld: " . sterrenBeeld(25,1);

echo "<br>";

echo "Opdracht 2 reverseString: ";
echo reverseString("Michael");





?>