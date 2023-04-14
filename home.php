<?php
    session_start();
    require('config/dbconfig.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
  <title>Your exam partner</title>
</head>
 <body>
    <br>
                                <h1>YOUR EXAM PARTNER</h1>
  <form id="center" action="home.php" method="POST">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"><br>
    <label for="age">Age:</label><br>
  <input type="text" id="age" name="age"><br>
     <label for="Pref">Stream:</label><br>
  <input type="text" id="pref" name="pref" placeholder="Law/Medicines/Engineering">
  <br>
  <input type="submit" value="Submit" name="sub">
    </form><br><br>
   
    
</body>

</html>

<?php

  if(isset($_POST["sub"]))
  {
    echo "hi";
    $age=$_POST['age'];
    $stream =$_POST['pref'];
    $fname= $_POST['fname'];

    $_SESSION['age']=$age;
    $_SESSION['str']=$stream;
    $_SESSION['fname']=$fname;
    header('location:result.php');

  }
      
?>