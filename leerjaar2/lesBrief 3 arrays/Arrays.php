<?php

//opdracht 1
echo "<h2>Array opdracht 1</h2>";
$meubels = array("Tafel","Stoel","Kast", "Bank");
print_r($meubels);

echo "<h2>Array opdracht 2</h2>";

//Opdracht 2
$naleeftijd = array("Ahmed"=>"26", "Monique"=>"38", "Priscilla"=>"18");


//opdracht 3
echo"<h2>Array opdacht 3 </h2>";
foreach($naleeftijd as $x => $x_Value){
    echo $x . $x_Value;
    echo "<br/>";
}

//opdracht 4
echo "<h2>Array opdracht 4</h2>";
array_push($meubels,"Salontafel","Bureau");
print_r($meubels);


echo "<h2>Array opdracht 5 & 6</h2>";
//opdracht 5
$persoon_multi = array(
    "Achmed" => array(
        "Naam" => "Achmed",
        "Leeftijd" => "26",
        "Geslacht" => "Iets"
    ),

    "Monique" => array(
        "Naam" => "Monique",
        "Leeftijd" => "31",
        "Geslacht" => "vrouw"
    ),

    "Priscilla" => array(
        "Naam" => "Priscila",
        "Leeftijd" => "18",
        "Geslacht" => "vrouw"
    )

);
?>
    <table style="border-style: dashed">
        <tr>
            <th>Naam</th>
            <th>Leeftijd</th>
            <th>Geslacht</th>
        </tr>
        <?php foreach ($persoon_multi as $pers) :?>
        <tr>
            <td><?php echo $pers['Naam'] ?></td>
            <td><?php echo $pers['Leeftijd'] ?></td>
            <td><?php echo $pers['Geslacht']?></td>
        </tr>
        <?php endforeach ?>
    </table>

    <h2>Array opdracht 5 & 6.1</h2>
    <table style="border-style: groove">
        <th>Naam</th>
        <th>Leeftijd</th>
        <th>Geslacht</th>

        <?php
        foreach ($persoon_multi as $per )
        {
            echo "<tr>";
            echo "<td>". $per['Naam'] . "</td>";
            echo "<td>". $per['Leeftijd'] . "</td>";
            echo "<td>". $per['Geslacht'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>






