<form action="">
    <h2>opdracht 1</h2>
    <select name="" id="">
        <?php
        for($i = 1910; $i <= 2016; $i++)
        {
            echo "<option value=$i> $i </option>";
        }
        ?>
    </select>
</form>

<h2>opdracht 2</h2>
<?php
$productCalorien = Array(
    "Hamburger" => "560",
    "Patat met mayo" => "600",
    "Patat met kapsalon" => "1600"

)
?>

    <?php foreach ($productCalorien as $product => $cal)
    {
        echo "In het product " . $product . " zitten " . $cal . " calorieEn" . "<br>";
    }
    ?>


<h2>opdracht 3</h2>
<?php
$i = 2012;
do{
    echo "$i", "<br>";
    $i += 4;
}
while($i <= 2084);
?>

<h2>opdracht 4</h2>
<?php
$auto = Array(
    "audi" => Array(
        "Naam" => "Audo A6",
        "Max snelheid" => "240 km/h",
        "verbruik" => "12"
    ),
    "porsche" => Array(
        "Naam" => "Porsche 911",
        "Max snelheid" => "290 km/h",
        "verbruik" => "8"
    ),
    "fiat" => Array(
        "Naam" => "Fiat panda",
        "Max snelheid" => "140 km/h",
        "verbruik" => "22"
    )

);

foreach ($auto as $car ) {
    echo "Naam: " . $car['Naam'];
    if($car['verbruik'] > 11)
    {
        echo "(lekker zuinig)";
    }
    echo "<br>";
    echo "Max snelheid: " . $car['Max snelheid'];
    echo "<br>";
    echo "Verbruik: " . " 1 op " . $car['verbruik'];
    echo "<br>";
    echo "<br>";
}

?>


