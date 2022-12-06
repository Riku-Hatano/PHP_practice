<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-start align-items-center g-2">
            <div class="col">
            <?php
            $data = [];
                // echo "<h3>".$_SERVER['PHP_SELF']."</h3>";
                // echo "<h3>".$_SERVER['SERVER_NAME']."</h3>";
                // echo "<h3>".$_SERVER['HTTP_HOST']."</h3>";
                // echo "<h3>".$_SERVER['HTTP_USER_AGENT']."</h3>";
                // echo "<h3>".$_SERVER['SCRIPT_NAME']."</h3>";
                // echo "<h3>".$_SERVER['REQUEST_METHOD']."</h3>";
                // if(isset($_GET['fname'])){
                //     echo "<h3> you have typed:".$_GET['fname']." ". $_GET['lname']." ".$_GET['gender']."</h3>";
                // }
                if($_SERVER['REQUEST_METHOD']=="POST"){
                    // echo "<h3> you have typed:".$_POST['fname']." ". $_POST['lname']." ".$_POST['gender']."</h3>";
                    array_push($data,[$_POST['fname'],$_POST['lname'],$_POST['gender']]);
                    print_r($data);
                }
            ?>
            </div>
        </div>
        <div class="row justify-content-start align-items-start g-2">
           <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
           <div class="col">
                <div class="form-floating mb-3">
                  <input
                    type="text"
                    class="form-control" name="fname" id="formId1" placeholder="fname">
                  <label for="fname">FirstName</label>
                </div>
                <div class="form-floating mb-3">
                  <input
                    type="text"
                    class="form-control" name="lname" id="formId1" placeholder="fname">
                  <label for="lname">LastName</label>
                </div>
                <div class="form-floating mb-3">
                  <input
                    type="password"
                    class="form-control" name="pass" id="formId1" placeholder="fname">
                  <label for="lname">Password</label>
                </div>
                
                <div class="mb-3">
                    <label for="" class="form-label">City</label>
                    <select class="form-select form-select-lg" name="gender" id="">
                        <option selected value="">Select one</option>
                        <option value="F">Female</option>
                        <option value="M">Male</option>
                        <option value="B">Non-Binary</option>
                        <option value="NA">Prefer not to say</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
           </form>
        </div>
    </div>
</body>
</html>