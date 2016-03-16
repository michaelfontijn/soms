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

    for($i = $stringlength -1;$i >= 0; $i--)
    {
        $temp = $temp . $stringToReverse[$i];
    }
    $temp = strtolower($temp);
    return $temp;
}


function ArrayToString($tempArray = array())
{
    $tempString = "";
    foreach($tempArray as $x)
    {
        $tempString =  $tempString . $x;
    }
    return $tempString;
}

function GetArrayForCurrentDayTime()
{
    $currentMonth = date('m' , time());
    $time = date('h:i:s a', time());

    $date = date('Y-m-d', time());
    $day = date('l', strtotime($date));

    $currentDayInformation =  array("Dayname" => $day, "Month" => $currentMonth ,"Time" =>  $time);
    return $currentDayInformation;
}

function RekenMachine($whatToDo, $a, $b)
{
    if($whatToDo == "*")
    {
        return $a * $b;
    }
    else if($whatToDo == "+")
    {
        return $a + $b;
    }
    //weet niet zo goed hoe ik wortel wil doen weet niet eens welk teken dat is , is wel een build in method/ function voor:
    //gmp_sqrt("9") zou de wortel van negen berekenen iGUES <3
}

function PrimeNumbers($numberOfPrimes)
{
    $primes = array();

    $index = 0;
    $primeCount = 0;

    while (true)
    {
      //if(index / 2 =)
    }
}

function prima($n){

    for($i=1;$i<=$n;$i++){  //numbers to be checked as prime

        $counter = 0;
        for($j=1;$j<=$i;$j++){ //all divisible factors


            if($i % $j==0){

                $counter++;
            }
        }

        //prime requires 2 rules ( divisible by 1 and divisible by itself)
        if($counter==2){

            print $i."<br/>";
        }
    }
}

function br()
{
    echo "<br>";
}




echo "Opdracht 1 sterrenbeeld";
echo "Sterrenbeeld: " . sterrenBeeld(25,1);
br();

echo "Opdracht 2 reverseString: ";
echo reverseString("Michael");
br();


echo "Opdracht 3 array to string:";
$snoepArray =  array("drop", "Loly", "Koek", "soms");
br();
echo ArrayToString($snoepArray);
br();

echo "Opdracht 4 array dagnaam tijd maand:";
print_r(GetArrayForCurrentDayTime());
br();

echo "Opdracht 5 rekenenenenen:";
br();
echo "5+5 = " . RekenMachine("+",5,5);
br();
echo "5*5 = " . RekenMachine("*",5,5);
br();

echo "Opdracht 6 priem getallen:";
br();
prima(400);
?>