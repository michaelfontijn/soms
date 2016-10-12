

<html>

<head>
    <title>Calculator</title>
</head>

<body>

<form name="formRekenen" action="#" method="post">
    <h3>Vul 2 values in </h3>
    <input type="text" placeholder="value 1" name="txtValue1">
    <input type="text" placeholder="value 2" name="txtValue2">
    <br/>
    <br/>
    <input type="submit" name="btnPlus" value="+" />
    <input type="submit" name="btnMin" value="-" />
    <input type="submit" name="btnKeer" value="*" />
    <input type="submit" name="btnDelen" value="/" />

   <hr/>
</form>

<?php

if(isset($_POST['btnPlus'])) {
    $value1 = $_POST['txtValue1'];
    $value2 = $_POST['txtValue2'];
    echo "Answer: " . plus($value1,$value2);
}

if(isset($_POST['btnMin'])) {
    $value1 = $_POST['txtValue1'];
    $value2 = $_POST['txtValue2'];
    echo "Answer " . Domin($value1,$value2);
}

if(isset($_POST['btnKeer'])) {
    $value1 = $_POST['txtValue1'];
    $value2 = $_POST['txtValue2'];
    echo "Answer: " . keer($value1,$value2);
}

if(isset($_POST['btnDelen'])) {
    $value1 = $_POST['txtValue1'];
    $value2 = $_POST['txtValue2'];
    echo "Answer: ".delen($value1,$value2);
}
?>

</body>

</html>


<?php
Function plus($value1, $value2)
{
    $answer = $value1 + $value2;
    return $answer;
}

Function Domin($value1, $value2)
{
    $answer = $value1 - $value2;
    return $answer;
}

Function keer($value1, $value2)
{
    $answer = $value1 * $value2;
    return $answer;
}

Function delen($value1, $value2)
{
    $answer = $value1 / $value2;
    return $answer;
}


?>