<?php
    $dataFile = fopen("./data/userData.txt", "r") or die("nothing");
    $data = fread($dataFile, filesize("./data/userData.txt"));
    fclose($dataFile);
    echo $data;

?>
