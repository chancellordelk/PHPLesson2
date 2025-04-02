<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conditionals</title>
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
              <a class="nav-link active" aria-current="page" href="conditionals.php">Conditionals</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="datatypes.php">Data Types</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="operators.php">Operators</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- PHP Content -->
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+pmk68L7Kw1Rrj9E4z4kczPz77rG" crossorigin="anonymous"></script>
  </body>
</html>