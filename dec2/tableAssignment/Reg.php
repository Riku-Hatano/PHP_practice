<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $position = $_POST["position"];
        $department = $_POST["department"];
        $salary = $_POST["salary"];
        $marriage = $_POST["marriage"];

        if($salary <= 0 ) {
            //to decline the negative and string value.
            echo "<h2>Illegal value! put in correct salary!";
        } else {
            echo "<h2>send data successfuly!</h2>";

            $newData = [
                "fname" => $fname,
                "lname" => $lname,
                "position" => $position,
                "department" => $department,
                "salary" => $salary,
                "marriage" => $marriage,
            ];

            if(file_exists('./data/EmpData.txt')){
                $dataFile = fopen('./data/EmpData.txt','r');
                $stringData = fread($dataFile,filesize('./data/EmpData.txt'));
                fclose($dataFile);
                $mainArray = json_decode($stringData,true);
    
    
                array_push($mainArray,$newData);
                $dataFile = fopen('./data/EmpData.txt','w');
                fwrite($dataFile,json_encode($mainArray));
                fclose($dataFile);
            }else{ 
                $mainArray = [];
                array_push($mainArray,$newData);
                $dataFile = fopen('./data/EmpData.txt','w');
                fwrite($dataFile,json_encode($mainArray));
                fclose($dataFile);
            }
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg.php</title>
</head>
<body>
    <a href="Emplist.php">show all employees</a>
</body>
</html>