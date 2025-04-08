<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Day of the Week</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                background-color:rgb(94, 90, 90); /* Light gray background */
                font-family: Arial, sans-serif;
            }
            .day-display {
                font-size: 3rem; /* Large font size */
                font-weight: bold;
                color: #333; /* Dark gray text */
                text-align: center;
            }
        </style>
    </head>

    <body>
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
    </body>
</html>