<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>super global</title>
</head>
<body>
    <div class="container">
        <div class="row justiry-content-start align-items-center g-2">
            <div class="col">
                <?php
                    // echo "<h3>".$_SERVER["PHP_SELF"]."</h3>";
                    // echo "<h3>".$_SERVER["SERVER_NAME"]."</h3>";
                    // echo "<h3>".$_SERVER["HTTP_HOST"]."</h3>";
                    // echo "<h3>".$_SERVER["HTTP_USER_AGENT"]."</h3>";
                    // echo "<h3>".$_SERVER["REQUEST_METHOD"]."</h3>";
                    // foreach($_SERVER as $name => $value) {
                    //     echo "<p>$name : $value</p>";
                    // }
                    $fname = $_GET["fname"];
                    $lname = $_GET["lname"];
                    if(isset($fname) == true && isset($lname) == true) {
                        echo "<h4>you typed $fname and $lname</h4>";
                    }
                ?>
            </div>
        </div>
        <form action="" method="GET">
            <input type="text" name="fname" id="fname">
            <input type="text" name="lname" id="lname">
            <input type="submit">
        </form>
    </div>
</body>
</html>

<!-- Kawaii desu ne. -->