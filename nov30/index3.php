<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dec30_3</title>
</head>
<body>
    <?php
        $marks = [67,89,56,45,50,100,56,89,20,76,85,93];
        $sum = 0;
        $bigger = $marks[0];
        $smaller = $marks[0];
        foreach($marks as $result) {
            if ($result > $bigger) {
                $bigger = $result;
            }
            if ($result < $smaller) {
                $smaller = $result;
            }
        }
        echo "<p>max is: $bigger, min is: $smaller</p>";

        $friends = ["yuto", "yuki", "daichi", "natsuki", "takahiro"];
        $new = "aaa";
        $classmates = ["bella", "honey", "nao"];
        
        // print_r(array_splice(array_slice($classmates, 0, count($classmates)), 1, 0, array_slice($friends, 0, count($friends))));
        // $copy = array_slice($friends, 0, count($friends));
        $friends2 = [];
        for ($i = 0 ; $i < count($friends) ; $i++) {
            $friends2[$i + 1] = $friends[$i];
        }
        $friends2[0] = $new;



        
        // print_r($friends2);
        // print_r($classmates = array_merge(array_slice($classmates, 0, 2), $friends, array_slice($classmates, 2)));

    ?>
</body>
</html>