<?php

/**
 * Created by PhpStorm.
 * User: michael
 * Date: 5-7-2016
 * Time: 11:34
 */
class ingrediënten extends Recept
{
    public function getAlIngredienten($ingredientIdFromRecept)
    {
        $db = new Database();
        $con= $db->connectDB();
        $result = $con->query("SELECT * FROM ingrediënten WHERE ingrediënt_id = $ingredientIdFromRecept");
        $recepten = mysqli_fetch_all($result);

        return $recepten;
    }
}