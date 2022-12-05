<?php
    $dataFile = fopen("./data/EmpData.txt", "r");
    $stringData = fread($dataFile, filesize("./data/EmpData.txt"));
    $jsonized = json_decode($stringData, true);
    fclose($dataFile);
    $salarySum = 0;
    $moreAvgList = [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emplist.php</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>FullName</th>
                <th>Position</th>
                <th>Department</th>
                <th>Base Salary</th>
                <th>Marriage Status</th>
                <th>Final Salary</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($jsonized as $dataBox) {
                    echo "<tr>";
                        foreach($dataBox as $key => $value) {
                            switch($key) {
                                case "fname":
                                    break;
                                case "lname":
                                    echo "<td>".$dataBox["fname"]." ".$value."</td>";
                                    break;
                                default:
                                    echo "<td>$value</td>";
                            }
                        }
                        if ($dataBox["marriage"] == "yes") {
                            echo "<td>".$dataBox["salary"] * 1.1."</td>";
                            $salarySum += $dataBox["salary"] * 1.1;
                        } else {
                            echo "<td>".$dataBox["salary"]."</td>";
                            $salarySum += $dataBox["salary"];
                        }
                    echo "</tr>";
                }
                ?>
        </tbody>
    </table>
    <?php
        echo "<h4>those who got paid more than average</h4>";
        echo "<ol>";
        $avg = $salarySum / count($jsonized);
        foreach($jsonized as $person) {
            if($person["marriage"] == "yes") {
                if($person["salary"] * 1.1 >= $avg) {
                    echo "<li>".$person["fname"]." ".$person["lname"]."</li>";
                }
            } else {
                if($person["salary"] >= $avg) {
                    echo "<li>".$person["fname"]." ".$person["lname"]."</li>";
                }
            }
        }
        echo "</ol>";
        echo "<p>average: $avg</p>";
    ?>
</body>
</html>