<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dec29</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<?php
// $place1 = "Stanley park";
// $place2 = "Gastown";
// $place3 = "Christmas market";
// $place4 = "whistler";
$places[4] = "new westminster";
$places[1] = "steam clock";
$places[count($places) - 1] = "Canada Place";
// $places[] = "name";
print $places[count($places) - 1];
array_pop($places); 
array_push($places, "vancouver", "parkroyal");
// $places = array_merge($places, $somearray); マージの使い方
// delete the last item of array 
//既にある配列を他の配列に追加した場合、mergeを使う。ただし、それを行う場合は新しい配列を作って、そこに足したい配列とたされる配列を入れる必要がある。

// array_rand($places, 3) 配列の中のランダムなキーを返す。配列の中の要素ではないので注意。二つ目の引数はキーを返す数を指定している。この場合、三つキーが返ってくる。
// print_r(array_rand($places, 3));

// print_r($places);

// echo "<ul>
//     <li>$places[0]</li>
//     <li>$places[1]</li>
//     <li>$places[2]</li>
//     <li>$places[3]</li>
//     <li>$places[4]</li>
// </ul>";

$places = ["Stanley park", "Gastown", "Chiristmas market", "whistler"];
$places2 = ["yellow knife", "steam clock", "my home"];
$places = array_merge($places, $places2);
$rand = [];
$rand = array_rand($places, 3);

print($places[0]);

echo "<h3>random</h3>";
echo "<ol>
    <li>" . $places[$rand[0]] . "</li>
    <li>" . $places[$rand[1]] . "</li>
    <li>" . $places[$rand[2]] . "</li>
</ol>";

echo "<h3>list with while</h3>";
echo "<ul>";
$counter = 0;
while($counter < count($places)) {
    echo "<li>$places[$counter]</li>";
    $counter++;
}
echo "</ul>";

echo "<h3>list with for</h3>";
echo "<ol>";
for ($i = 0 ; $i < count($places) ; $i++) {
    echo "<li>$places[$i]</li>";
}
echo "</ol>";

// $num1 = 10;
// $num2 = 11;
// $str1 = "str1";
// $str2 = "str2";

// echo "<p>" . $num1 + $num2 . "</p>"; //not work
// echo "<p>" . $num1 - $num2 . "</p>"; //not work
// echo "<p>" . ($num1 + $num2) . "</p>"; //work
// echo "<p>" . ($num1 - $num2) . "</p>"; //work
// echo "<p>" . $num1 * $num2 . "</p>"; //work
// echo "<p>" . $num1 / $num2 . "</p>"; //work
// echo "<p>" . $num1 % $num2 . "</p>"; //work
// echo "<p>" . $str1 . $str2 . "</p>"; //work
// echo "<p>" . $str1 + $str2 + $num1 . "</p>"; //work
//dot operator works without space
//文字列を使って計算する場合、ゼロとして計算される。エラーが出るが計算結果は出力される。

$marks = [67, 89, 56, 90, 45, 100, 20, 76, 85, 93];
$sum = 0;
for ($i = 0 ; $i < count($marks) ; $i++) {
    $sum += $marks[$i];
}
echo "<h2>".$sum / count($marks)."</h2>";
?>
<!-- <script>
    $("li").
</script> -->
</body>
</html>





