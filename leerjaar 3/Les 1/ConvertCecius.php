

<html>

<head>
    <title>Convert</title>
</head>

<body>

<form name="Convert" action="#" method="post">
    <h3>Vul 2 values in </h3>
    <p>Celcius: </p><input type="text" placeholder="Celcius" name="txtCelcius">
    <p>Fahrenheit: </p><input type="text" placeholder="Farenheit" name="txtFahrenheit">
    <br/>
    <br/>

    <input type="submit" name="btnConvert" value="Convert" />
    <hr/>

</form>

<?php

if(isset($_POST['btnConvert'])) {
    $celcius = $_POST['txtCelcius'];
    $fahrenheit = $_POST['txtFahrenheit'];
    echo convert($celcius, $fahrenheit);
}
?>

</body>

</html>


<?php
Function convert($celcius, $fahrenheit)
{
    if($celcius != "")
    {
        $answer = ($celcius * 1.8) + 32;
        return $answer . " fahrenheit";
    }
    else if($fahrenheit != "")
    {
       $answer = ($fahrenheit - 32) / 1.8 ;
        return $answer . " grade celcius";
    }
}



?>