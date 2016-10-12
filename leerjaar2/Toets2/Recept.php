<?php
include("Database.php");
class Recept
{


    function __construct()
    {

    }

    public function getRecepten()
    {
        $db = new Database();
        $con= $db->connectDB();
        $result = $con->query("SELECT * FROM recepten ");
        $recepten = mysqli_fetch_all($result);

        return $recepten;
    }

    public function getAlIngredienten($ingredientIdFromRecept)
    {
        $db = new Database();
        $con= $db->connectDB();
        $result = $con->query("SELECT * FROM ingrediënten WHERE ingrediënt_id = $ingredientIdFromRecept");
        echo $result . "SOMS";
        $ingrdienten = mysqli_fetch_all($result);

        return $ingrdienten;
    }
}
