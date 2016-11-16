<?php

/**
 * Created by PhpStorm.
 * User: michael
 * Date: 16-11-2016
 * Time: 12:04
 */
class Dobbelsteen
{
    public $aantalZeide;

    public function __construct($aantalZeide)
    {
        $this->$aantalZeide = $aantalZeide;
    }

    public function MakeTextBoxForEachZeide()
    {
        for($i = 0; $i <= $this->aantalZeide; $i++)
        {
            echo "Zeide" . $i . ":";
        }
    }



}