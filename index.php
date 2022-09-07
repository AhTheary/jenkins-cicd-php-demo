<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-05</title>
</head>
<body>
    <?php
    $i = 1;

    while ($i <= 5){
        echo"Hello while $i times"."<br>";
        $i++;
    }
    ?>
    <?php
    $i = 0;

   do{
       $i++;
       echo"php do ...while loop $i times"."<br>";
    }while($i <=5);
    ?>
    <?php
    
    for ($i=1; $i<=5 ; $i++) { 
        echo"PHP for loop print $i times.<br>";
    }
    ?>
    <?php
    $salary[]=12000;
    $salary[] = 3000;
    $salary[]=5000;

    foreach($salary as $value){
        echo"Salary: $value<br>";
    }
    ?>
</body>
</html>
