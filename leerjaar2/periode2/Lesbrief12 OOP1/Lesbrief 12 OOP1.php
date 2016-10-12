




<h3>Wijzigen</h3>
<form name="formWijzig" action="#" method="post">
    <p>Voer hier het id in van de artiest die je wilt wijzigen: </p>
    <input type="text" name="txtArtiestId" />
    <input type="submit" id="btnWijzig" value="Wijzig"/>
</form>
<hr/>

<h3>Verwijderen</h3>
<form name="formVerwijder" action="#" method="post">
    <p>Voer hier het id in van de artiest die je wilt verwijderen: </p>
    <input type="text" name="txtArtiestId" />
    <input type="submit" id="btnVerwijder" value="Verwijder"/>
</form>
<hr/>

<h3>Lezen</h3>
<form name="formLezen" action="#" method="post">
    <p>Voer  hier je cijfer in: </p>
    <input type="text" name="txtCijferInvoer" />
    <input type="submit" id="btnLezen" value="Get artiest data"/>
</form>
<hr/>

<h3>Aanmaken</h3>
<form name="formInsert" action="#" method="post">
    <p>Voornaam: </p>
    <input type="text" name="txtVoornaam" />
    <p>Achternaam: </p>
    <input type="text" name="txtAchternaam" />
    <p>Artiest naam: </p>
    <input type="text" name="txtArtiestNaam" />
    <p>Land: </p>
    <input type="text" name="txtLand" />
    <p>Woonplaats: </p>: </p>
    <input type="text" name="txtWoonplaats" />
    <p>Geboorte datum: </p>
    <input type="datetime" name="txtGeboorteDatum" />
    <p>Website URL: </p>
    <input type="text" name="txtWebsite" />
    <p>Biografie: </p>
    <input type="text" name="txtBiografie" />



    <input type="submit" id="btnInsert" value="Create artiest"/>
</form>
<hr/>

<?php

include("Artiest.php");
$Artiestje = new Artiest("Michael", "Fontijn", "s0mz", "Holland", "Wormer", "25-01-1998", "", "Hoi mijn naam is michael enzo soms een beetje");

//eddit
if(isset($_POST['formWijzig'])) {
    $artiestId = $_POST['txtArtiestId'];
    $Artiestje->Bijwerken($artiestId);
}

if(isset($_POSt['formVerwijder']))
{
    $artiestId = $_POST['txtArtiestId'];
    $Artiestje->Verwijderen($artiestId);
}

if(isset($_POSt['formLezen']))
{
    $artiestId = $_POST['txtArtiestId'];

    $tempArray =  array();
    $tempArray = $Artiestje->lezen(1);
    print_r($tempArray);
}

if(isset($_POSt['formInsert']))
{
    $Artiestje->Aanmaken($Artiestje);
}











?>