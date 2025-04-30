<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
<?php
    //Loop

    //While Loop
    //Do while Loop
    //For Loop
    //Foreach Loop

    $x = 10;
    do{
        echo "hello there<br>";
        $x++;
    }
    while ($x <= 5);

    for($x = 1; $x <= 10; $x++) {
        echo "hey<br>";
    }
    $array = array("Daniel", "Doe", "Johnny", "Smith", "Robert");
    foreach($array as $loopdata) {
        echo "my name is ".$loopdata."<br>";
    }


?>
</body>