<?php
    // $dataFile = fopen('./data/userData.txt','r');
    // $data = fread($dataFile,filesize('./data/userData.txt'));
    // fclose($dataFile);
    // echo $data;
    // $data = '[{
    //     "id": 1,
    //     "first_name": "Margareta",
    //     "last_name": "Grundwater",
    //     "email": "mgrundwater0@newyorker.com",
    //     "gender": "Female",
    //     "ip_address": "75.24.211.235"
    //   }, {
    //     "id": 2,
    //     "first_name": "Daniela",
    //     "last_name": "Antowski",
    //     "email": "dantowski1@de.vu",
    //     "gender": "Female",
    //     "ip_address": "179.126.202.116"
    //   }]';
    //   print_r(json_decode($data,true));
    // 1- if there's no data inside the file.creating an empty main array.
    // 2- add the new data as an assocciate array to the main array.
    // 3- convert back to string json using json_encode.
    // 4- save the converted data into the text file.
    // if file contains data, open the file in the read mode and read the entire data.
    // 1- convert data to an array of assocciate arrays using json_decode.
    // 2- push the new data to the converted array.
    // 3- save the data in write mode.
      $data2 = [['fname'=>'Lucas','lname'=>'A','Country'=>'India']];
    //   print_r(json_encode($data2));
      $jsonString = json_encode($data2);
      $jsonData = json_decode($jsonString,true);
      array_push($jsonData,['fname'=>'Maricio','lname'=>'Ogata','Country'=>'Brazil']);
      print_r($jsonData);
      print_r(json_encode($jsonData));
      echo "<table>";
      echo "</table>";
?>