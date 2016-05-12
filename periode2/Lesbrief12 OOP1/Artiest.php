<?php
include("Database.php");


class Artiest
{

    public $voornaam;
    public $achternaam;
    public $artiestenNaam;
    public $land;
    public $woonplaats;
    public $geboortedatum;
    public $website = "";
    public $biografie;


    public function __construct($voornaam, $achternaam, $artiestenNaam, $land, $woonplaats, $geboortedatum, $website, $biografie)
    {
        $this->voornaam = $voornaam;
        $this->achternaam = $achternaam;
        $this->artiestenNaam = $artiestenNaam;
        $this->land = $land;
        $this->woonplaats = $woonplaats;
        $this->website = $website;
        $this->biografie = $biografie;

    }


    public function Aanmaken(Artiest $artiest)
    {
        $db = new Database();
        $con =  $db->connectDB();


       $con->query("INSERT INTO artiesten(Voornaam, Achternaam, ArtiestenNaam, Land, Woonplaats, Geboortedatum, Website, Biografie) VALUES ('{$artiest->voornaam}','{$artiest->achternaam}','{$artiest->artiestenNaam}','{$artiest->land}','{$artiest->woonplaats}','{$artiest->geboortedatum}','{$artiest->website}','{$artiest->biografie}')");


       echo "Gelukt!";

    }

    public function Bijwerken($artiestId)
    {
        $db = new Database();
        $con =  $db->connectDB();


        $con->query("UPDATE artiesten SET id='{value-1}',Voornaam='{value-2}',Achternaam='{value-3}',ArtiestenNaam='{value-4}',Land='{value-5}',Woonplaats='{value-6}',Geboortedatum='{value-7}',Website='{value-8}',Biografie='{value-9}' WHERE id='{}'");


        echo "Gelukt!";
    }

    public function Verwijderen($artiestId)
    {
        $db = new Database();
        $con =  $db->connectDB();


        $con->query("DELETE FROM artiesten WHERE id='{$artiestId}'");


        echo "Gelukt!";
    }

    public function Lezen($artiestId)
    {
        $db = new Database();
        $con =  $db->connectDB();


        $con->query("SELECT * FROM artiesten WHERE id='{$artiestId}'");


        echo "Gelukt!";
    }


}