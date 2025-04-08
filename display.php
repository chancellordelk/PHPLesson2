<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Day of the Week</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
        <style>
            body {
                margin: 0;
                font-family: Arial, sans-serif;
                background-color: rgb(94, 90, 90); /* Light gray background */
                color: #333; /* Dark gray text */
            }
            .day-display-container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: calc(100vh - 56px); /* Full height minus navbar height */
            }
            .day-display {
                font-size: 3rem; /* Large font size */
                font-weight: bold;
                text-align: center;
            }
        </style>
    </head>

    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                            <a class="nav-link" href="operators.php">Operators</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="calculator.php">Calculator</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="display.php">Day Display</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Day Display -->
        <div class="day-display-container">
            <div class="day-display">
                <?php
                    // Get the current day of the week as a number (0 for Sunday, 1 for Monday, etc.)
                    $dayofweek = date("w");

                    // Use a switch statement to display the correct day
                    switch ($dayofweek) {
                        case 0:
                            echo "It's Sunday!";
                            break;
                        case 1:
                            echo "It's Monday!";
                            break;
                        case 2:
                            echo "It's Tuesday!";
                            break;
                        case 3:
                            echo "It's Wednesday!";
                            break;
                        case 4:
                            echo "It's Thursday!";
                            break;
                        case 5:
                            echo "It's Friday!";
                            break;
                        case 6:
                            echo "It's Saturday!";
                            break;
                        default:
                            echo "Invalid day!";
                            break;
                    }
                ?>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+pmk68L7Kw1Rrj9E4z4kczPz77rG" crossorigin="anonymous"></script>
    </body>
</html>