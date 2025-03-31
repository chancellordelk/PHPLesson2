<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  </head>
  <body>
   <?php
        //Arithmetic Operators
        echo 6**6
?>
    <?php
        //Assignment Operators
        $x = 200;
       $x += 20;
       
        echo $x;
        ?>
    <?php
        //Comparison Operators
        $x =8;
        $y = 9;

        if ($x == $y) {
            echo "True!";
        }
        else {
            echo "False!";
        }
    ?>
        <?php
        //Increment/Decrement Operators
        $x = 5;
        echo $x++;
        echo $x;
  ?>
    <?php
        //Logical Operators
        $x = 8;
        $y = 14;

        if ($x == $y xor 2 == 2) {
            echo "True";
        }
    ?>
  </body>
</html>