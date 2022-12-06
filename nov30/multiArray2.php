<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $students = ['Damrok'=>[78,89,57,100],'Clare'=>[85,68,78,95],'Yooran'=>[76,98,45,100],'Takumi'=>[54,89,88,98]];
        echo $students['Takumi'][0];
    ?>
    <table border='1'>
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Course 1</th>
                <th>Course 2</th>
                <th>Course 3</th>
                <th>Course 4</th>
                <th>Max</th>
                <th>Min</th>
                <th>Avg</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $totalAvg = [];
                foreach($students as $name=>$marks){
                    $sum = 0;
                    $max = 0;
                    $min = 100;
                    echo "<tr><td>$name</td>";
                    foreach($marks as $val){
                        echo "<td>$val</td>";
                        $sum += $val;
                        if($max < $val) $max = $val;
                        if($min > $val) $min = $val;
                    }
                    // array_push($totalAvg,$sum/count($marks));
                    $totalAvg[$name] = $sum/count($marks);
                    echo "<td>$max</td><td>$min</td><td>".$sum/count($marks)."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <?php
        $sum = 0;
        $max = 0;
        $min = 100;
        $names = [];
        foreach($totalAvg as $name=>$avg){
            $sum += $avg;
            if($max<$avg) {
                $max = $avg;
                $bst = $name;
            }
            if($min>$avg) {
                $min = $avg;
                $lst = $name;
            }
        }
        echo "<h3>Max is: $bst - Min: $lst - AVG: ".$sum/count($totalAvg)."</h3>";
        foreach($totalAvg as $name => $score) {
            if($score > $sum/count($totalAvg)) {
                echo "<h3>$name</3>";
            }
        }
    ?>
</body>
</html>