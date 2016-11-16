<form name="formAantalZeide" action="#" method="post">
    <p>Aantal zeide van de dobbelsteen? </p>
    <input type="text" name="txtAantalZeideDobbelsteen" />
    <input type="submit" name="btnAantalZeide" value="SubmitIT" />
</form>

<?php

include 'Dobbelsteen.php';


if(isset($_POST['formAantalZeide']))
{

    $aantalZeide = $_POST['txtAantalZeideDobbelsteen'];

    if($aantalZeide == "") return;

    $dobbel = new Dobbelsteen($aantalZeiden);
    $dobbel ->MakeTextBoxForEachZeide();
}


?>



