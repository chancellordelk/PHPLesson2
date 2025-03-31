<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  </head>
  <body>
   <?php
        $x = 2;
        if ($x == 2) {
           echo "Josiah is a terrible hooper";
        } 
        elseif ($x == 3) {
          echo  "Josiah can kinda hoop";
        }
        elseif ($x == 5) {
            echo  "Josiah can kinda hoop";
          }
        elseif ($x == 7) {
            echo  "Josiah can kinda hoop";
          }
        else {
            echo "Jossemar can spell";
        }

   ?>
   <?php
        $x = "number";
        switch ($x) {
            case 1:
                echo "The answer is 2";
            break;
            case "number":
                echo "The answer is number";
            break;
        }
   ?>
   </body>
   </html>