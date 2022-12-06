<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $newData = ['fname'=>$fname,'lname'=>$lname];
        $mainArray = [];
        $dataFile = fopen('./data/userData.txt','r');
        $stringData = fread($dataFile,filesize('./data/userData.txt'));
        $mainArray = json_decode($stringData,true);
        array_push($mainArray, $newData);
        $dataFile = fopen("./data/userData.txt", "w");
        fwrite($dataFile, json_encode($mainArray));
        fclose($dataFile);
    }
?>
<a href="readData.php">jump to data</a>