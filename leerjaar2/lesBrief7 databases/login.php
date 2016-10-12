<form target="" method="post">
    <input type="text" name="txtUsername"/>
    <input type="password" name="txtPassword"/>
    <input type="submit" name="btnlogin"/>
</form>

<?php

if(isset($_POST["btnlogin"])) {
    $link = mysqli_connect("localhost", "root","", "phpschool");


    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    $username = $_POST['txtUsername'];
    $password = $_POST['txtPassword'];

    $result =
    $result = $link->prepare("SELECT COUNT(username) AS countingz FROM login WHERE username= ? AND password= ?");
    $result->bind_param("ss", $username, $password);
    $result-> execute();
    $result->bind_result($count);
    $result->fetch();



    if($count > 0)
    {
        header('Location: '. "index.php");
    }
    else
    {
        echo "Sorry the username or password is incorrect, please try again.";
    }

    mysqli_close($link);
}


function connectDB(){
    $db_host = 'localhost';
    $db_name = 'phpschool';
    $db_user = 'root';
    $db_pass = '';
    $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
    if($mysqli->connect_error){
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }else{
        return $mysqli;
    }
}

?>