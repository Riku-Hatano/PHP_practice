<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dec30_md</title>
</head>
<body>
    <?php
        $students = ["Damrok" => [78,89,57,100], "Clare" => [85,68,78,95], "Yooran" => [76,98,45,100], "Takumi" => [54,89,78,98]];

    ?>
    <table border="1">
        <thead>
            <tr>
                <th>student name</th>
                <th>course 1</th>
                <th>course 2</th>
                <th>course 3</th>
                <th>course 4</th>
                <th>avg</th>
                <th>max</th>
                <th>min</th>
            </tr>
            <?php
            $sum = 0;
            $max = 0;
            $min = 100;
            foreach($students as $name => $mark) {
                echo "<tr>";
                    echo "<td>$name</td>";
                    foreach($mark as $key => $eachMark) {
                        echo "<td>$eachMark</td>";
                        $sum += $eachMark;
                        if($eachMark > $max) {
                            $max = $eachMark;
                        }
                        if($eachMark < $min) {
                            $min = $eachMark;
                        }
                    }
                    echo "<td>" . $sum / count($mark) . "</td>"; 
                    echo "<td>$max</td>"; 
                    echo "<td>$min</td>"; 
                    $sum = 0;
                    $max = 0;
                    $min = 100;
                echo "</tr>";
            };
            ?>
        </thead>
    </table>
</body>
</html>