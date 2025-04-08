<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: rgb(12, 12, 12);
            font-family: Arial, sans-serif;
        }
        .calculator {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
            margin: 100px auto; /* Center the calculator below the navbar */
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
                        <a class="nav-link active" aria-current="page" href="calculator.php">Calculator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="display.php">Day Display</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Calculator -->
    <div class="calculator">
        <h2 class="text-center">Calculator</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="num1" class="form-label">Number 1</label>
                <input type="number" name="num1" id="num1" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="num2" class="form-label">Number 2</label>
                <input type="number" name="num2" id="num2" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="operation" class="form-label">Operation</label>
                <select name="operation" id="operation" class="form-select" required>
                    <option value="add">Addition</option>
                    <option value="subtract">Subtraction</option>
                    <option value="multiply">Multiplication</option>
                    <option value="divide">Division</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100">Calculate</button>
        </form>
        <div class="mt-3">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $operation = $_POST['operation'];
                    $result = "";

                    switch ($operation) {
                        case "add":
                            $result = $num1 + $num2;
                            break;
                        case "subtract":
                            $result = $num1 - $num2;
                            break;
                        case "multiply":
                            $result = $num1 * $num2;
                            break;
                        case "divide":
                            if ($num2 != 0) {
                                $result = $num1 / $num2;
                            } else {
                                $result = "Error: Division by zero";
                            }
                            break;
                        default:
                            $result = "Invalid operation";
                            break;
                    }

                    echo "<div class='alert alert-info text-center'>Result: $result</div>";
                }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+pmk68L7Kw1Rrj9E4z4kczPz77rG" crossorigin="anonymous"></script>
</body>
</html>