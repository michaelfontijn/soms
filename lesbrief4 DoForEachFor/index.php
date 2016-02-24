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

    <?php foreach ($productCalorien as $product => $cal) :?>
        <?php
        echo "In het product " . $product . " zitten " . $cal . " calorieEn" . "<br>";
        ?>
    <?php endforeach ?>


<h2>opdracht 3</h2>
<?php
$i = 2012;
do{
    echo "$i";
    $i += 4;
}
while($i <= 2084);
?>