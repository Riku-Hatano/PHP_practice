<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $dataFile = fopen("./data/userData.txt", "a") or die("nothing");
        fwrite($dataFile,"[$fname,$lname]");
        fclose($dataFile);
    } 
?>
<a href="readData.php">jump to page</a>