<!-- Opdracht 1-->
<form name="formCijfer" action="#" method="post">
<p> Voer  hier je cijfer in: </p>
<input type="text" name="txtCijferInvoer" />
<input type="submit" name="bekerenCijfer" value="Bereken je cijfer!" />
</form>

<?php  


if(isset($_POST['bekerenCijfer']))
{

$a = $_POST['txtCijferInvoer'];
if($a > 0  && $a < 6 )
{
	echo '<p>'."Onvoldoende".'</p>';
}
else if($a > 5 && $a <9)
{
	echo '<p>'."Voldoende".'</p>';
}
else if($a > 8 && $a < 11)
{
	echo '<p>'."Goed".'</p>';
}
else if($a > 10)
{
	echo '<p>'."Fraude".'</p>';
}
}



?>
<!-- Opdracht 2-->
<form name="formGeboortejaar" action="#" method="post">
<p>Voer hier je geboortje jaar in: </p>
<input type="text" name="txtGeboortjeJaar" />
<input type="submit" name="berekenLeeftijd" value="Check wat JOUW TIJD was!" />
</form>

<?php
if(isset($_POST['berekenLeeftijd']))
{

$geboorteJaartje = $_POST['txtGeboortjeJaar'];
if($geboorteJaartje + 10 >= 1970 && $geboorteJaartje +10 <= 1979)
{
	echo "Uit de seventies";
}
else if($geboorteJaartje + 10 >= 1980 && $geboorteJaartje + 10<= 1989)
{
	echo "Uit de eighties";
}
else if($geboorteJaartje + 10 >=  1990 && $geboorteJaartje + 10 <= 1999)
{
	echo "Uit de nineties";
}
else if($geboorteJaartje + 10 >=  2000 && $geboorteJaartje + 10 <= 2009)
{
	echo "Uit de zeros";
}
else if($geboorteJaartje > 2009)
{
	echo "soms";
}
}
?>
<!-- Opdracht 3-->
<form name="formGeboortejaar" action="#" method="post">
<p>Vars the same?</p>
<input type="submit" name="ifElseVarsTheSame" value="If else vars the same??" />
</form>

<?php
if(isset($_POST['ifElseVarsTheSame']))
{
$a = 10;
$b = 10;
$c = "10";

if($a === $b && $a ===$c && $b === $c)
{
	echo "yup";
}
else
{
	echo "nope";
}
}


?>
<!-- Opdracht 4-->
<form name="formGeboortejaar" action="#" method="post">
	<p>Verkorte if else soms </p>
	<input type="text" name="txtGeboortjeJaarKort" />
	<input type="submit" name="berekenLeeftijdKort" value="Check wat JOUW TIJD was!" />
</form>

<?php
if(isset($_POST['berekenLeeftijdKort']))
{

$geboorteJaartje = $_POST['txtGeboortjeJaarKort'];
$geboorteJaartjePlusTien = $geboorteJaartje + 10;

echo($geboorteJaartjePlusTien>= 1970 && $geboorteJaartjePlusTien <= 1979 ? "Uit de seventies" : '');
echo($geboorteJaartjePlusTien>= 1980 && $geboorteJaartjePlusTien <= 1989 ? "Uit de eighties" : '');
echo($geboorteJaartjePlusTien>= 1990 && $geboorteJaartjePlusTien <= 1999 ? "Uit de nineties" : '');
echo($geboorteJaartjePlusTien>= 2000 && $geboorteJaartjePlusTien <= 2009 ? "Uit de zeros" : '');


}
?>

<!-- Opdracht 5-->
<form name="formGeboortejaar" action="#" method="post">
<p>Appel kroket??? sinaasappel? :O</p>
<input type="submit" name="DoMagic" value="Do some magic" />
</form>

<?php
if(isset($_POST['DoMagic']))
{
$product = "appel";
switch($product)
{
case "sinaasappel":
echo "Sinaasappel";
break;

case  "kroket":
echo "Kroket";
break;

case "appel":
echo "Appeltje!";
break;
}


}

?>




