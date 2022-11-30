<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice average</title>
</head>
<body>
    <?php 
        $marks = [67, 89, 56, 90, 45, 100, 20, 76, 85, 93];
        $sum = 0;
        for ($i = 0 ; $i < count($marks) ; $i++) {
            $sum += $marks[$i];
        }
    ?>
</body>
</html>