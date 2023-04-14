<?php
    session_start();
    require('config/dbconfig.php');
?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
  <title>Your exam partner</title>
</head>

    <br>
                                <h1>YOUR EXAM PARTNER</h1>

    <br>
    <h2>Hello <?php echo $_SESSION['fname'] ?>!</h2>
    <h2><b>The Exams based on your input are :</b></h2>
    
<?php

        $age=$_SESSION['age'];
        $stream=$_SESSION['str'];
        
        $query = "select * from exam where stream = '$stream'";
        $query_run = mysqli_query($con,$query);
       // var_dump($query_run);
        while($row=mysqli_fetch_array($query_run, MYSQLI_ASSOC))
        {
            ?>
            <h3><?php echo $row['exam_name']?></h3> 
            <?php
        }

?>




