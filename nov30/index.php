<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dec30</title>
</head>
<body>
    <?php
    $box = [];
    $strBox = ["lorem", "riku", "hatanoooooo", "lu", "tianye", "gym"];
    $strBox2 = ["hatano", "yamada", "satou", "suzuki"];
    $howMany = mt_rand(10, 30);
    $numbox = [3, 55, 3, 7, 44949, 4];

    $assoArray = [
        ["lname" => "hatano", "fname" => "riku"],
        ["lname" => "tianye", "fname" => "lu"],
        ["lname" => "yamada", "fname" => "takayuki"],
        ["lname" => "shangtian", "fname" => "kaozhi"],
    ];

    function calc($num) {
        $num *= 10;
        echo "<p>$num</p>";
    }



    foreach ($assoArray as $return) {
        echo "<p>" . $return["lname"] . "</p>";
    };

    

    for ($i = 0 ; $i < $howMany ; $i++) {
        $randomElement = mt_rand(0, count($strBox) - 1);
        $randomElement2 = mt_rand(0, count($strBox2) - 1);
        $element = [
            "fname" => $strBox[$randomElement],
            "lname" => $strBox2[$randomElement2]
        ];
        $box[] = $element;
    }

    echo "<ul>";
    for ($i = 0 ; $i < count($box) ; $i++) {
        echo "<li>" . $box[$i]["fname"].$box[$i]["lname"] . "</li>";
    }
    echo "</ul>";

    

    // for ($i = 0 ; $i < $howMany ; $i++) {
    //     $randomStr = mt_rand(0, count($strBox) - 1);
    //     $box[] = $strBox[$randomStr];
    // }

    // echo "<ol>";
    // for ($i = 0 ; $i < $howMany ; $i++) {
    //     echo "<li>$box[$i]</li>";
    // }
    // echo "</ol>";
    


    ?>
</body>
<script>
    // let i = [1, 33, 5, 6666, 39999999];
    // let j = [
    //     {name: "banana", price: 100},
    //     {name: "apple", price: 1000},
    //     {name: "chocolate bar", price: 20},
    //     {name: "tale of phoenix", price: 9999},
    // ]
    // let fei = i.forEach((value, value2, value3) => {
    //     console.log(`${value} : ${value2} : ${value3}`)
    // })

    // let fej = j.forEach((value) => {
    //     console.log(`${value.name} : ${value.price}`)
    // })
    // let objj = Object.keys(j).forEach((value) => {
    //     console.log()
    // })
    // console.log(Object.keys(j))
    // Object.keys(j[0]).forEach((value) => {
    //     console.log(value)
    // })
    // let ma = i.map((value) => {
    //     console.log(value)
    // })
</script>
</html>