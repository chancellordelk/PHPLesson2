<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Operators</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">PHP Lessons</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="conditionals.php">Conditionals</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="datatypes.php">Data Types</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="operators.php">Operators</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- PHP Content -->
    <?php
        // Arithmetic Operators
        echo 6 ** 6;
    ?>
    <?php
        // Assignment Operators
        $x = 200;
        $x += 20;
        echo $x;
    ?>
    <?php
        // Comparison Operators
        $x = 8;
        $y = 9;

        if ($x == $y) {
            echo "True!";
        } else {
            echo "False!";
        }
    ?>
    <?php
        // Increment/Decrement Operators
        $x = 5;
        echo $x++;
        echo $x;
    ?>
    <?php
        // Logical Operators
        $x = 8;
        $y = 14;

        if ($x == $y xor 2 == 2) {
            echo "True";
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+pmk68L7Kw1Rrj9E4z4kczPz77rG" crossorigin="anonymous"></script>
  </body>
</html>