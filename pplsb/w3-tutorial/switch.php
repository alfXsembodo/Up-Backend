<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If else</title>
</head>
<body>

    <?php

        $favcolor = "yellow";

        switch($favcolor) {
            case "red":
                echo "Your favorite color is red";
            break;
            case "green":
                echo "Your favorite color is green";
            break;
            case "blue":
                echo "Your favorite color is blue";
            break;
            default :
                echo "Your favorite color neither red, blue, nor green!";
        }

    ?>
    
</body>
</html>