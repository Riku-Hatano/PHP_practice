<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dec30_4</title>
</head>
<body>
    <?php
        $students = ["Damrok" => 78, "Clare" => 85, "Yooran" => 76, "Takumi" => 54];
        
        // foreach($students as $key => $score)
        // print_r($keys);
    ?>
    <table>
        <thead>
            <tr>
                <td>Student Name</td>
                <td>Student Mark</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($students as $name => $mark) {
                    echo "<tr>";
                        echo "<td>$name</td>";
                        echo "<td>$mark</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <?php
        $sum = 0;
        $max = 0;
        $min = 100;
        foreach($students as $name => $mark) {
            $sum += $mark;
            if($max < $mark) {
                $bst = $name;
                $max = $mark;
            }
            if($min > $mark) {
                $min = $mark;
                $lst = $name;
            }
        }
        echo "<h3>best student: $bst - not best student: $lst - avg: " . $sum / count($students) . "</h3>"

    ?>
</body>
</html>