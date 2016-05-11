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

    }

    public function Verwijderen($artiestId)
    {

    }

    public function Lezen($artiestId)
    {

    }


}