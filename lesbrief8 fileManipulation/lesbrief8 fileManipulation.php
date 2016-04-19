

<?php

//Opdracht 1/2--
echo("<h1>Opdracht 1/ 2</h1>");
echo(readFileCool("C:\\xampp\\htdocs\\gitPHP\\soms\\lesbrief8 fileManipulation\\content\\opdracht1.txt"));
br();
//--

//Opdracht 3--
echo("<h1>Opdr 3 soms</h1>");
writeError("SOMS");
//--

//opdr4--
echo("<h1>Opdr 4 soms</h1>");
//--
?>
<form action="#" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<h1>Opdracht 5</h1>

<form action="opdracht%205/opdracht5.php" method="post" enctype="multipart/form-data">
    <h3>Select .doc of .docx bestand:</h3>
    <input type="file" name="fileToUpload2" id="fileToUpload2"><br/>
    <input type="submit" value="Upload" name="submit" class="btn btn-primary">
</form>


<?php
function readFileCool($filename)
{
    $temp = "SOMS";
    $file = fopen($filename, "r");

    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if($ext != "txt")
    {
        fclose($file);
        return $ext;
    }

    $dirName = dirname($filename,1);


    if(strpos($dirName,'content') == false)
    {
        fclose($file);
        return $dirName;
    }


    while(!feof($file))
    {
        $temp .= fgets($file);
    }
    fclose($file);
    return $temp;

}

function br()
{
    echo("<br/>");
}

function writeError($error)
{
    $file ="C:\\xampp\\htdocs\\gitPHP\\soms\\lesbrief8 fileManipulation\\logs\\error.txt";

    $current = file_get_contents($file);
    $date = date('m/d/Y h:i:s a',time());

    $newStr = substr_replace($current, $date . " " . $error . "\n",0,0);

    file_put_contents($file,$newStr);
}


$target_dir = "content/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "Bestand moet een image zijn.";
        $uploadOk = 0;
    }
}
// check of file groter is dan 2mb
if ($_FILES["fileToUpload"]["size"] > 2000000) {
    echo "Bestand is te groot, max 2mb";
    $uploadOk = 0;
}
// Alleen png en jpg
if($imageFileType != "jpg" && $imageFileType != "png" ) {
    echo "Alleen jpg en png images.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Image is niet geupload.";
// Als alles goed is, wordt $uploadOk dus 1 en wordt image geupload naar content folder
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The image ". basename( $_FILES["fileToUpload"]["name"]). " is geupload.";
    } else {
        echo "Sorry, er is iets fout gegaan met uploaden.";
    }
}






?>
