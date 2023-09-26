<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If else</title>
</head>
<body>

    <?php
    date_default_timezone_set("Asia/Bangkok");
    $t = date('H');

    // if( $t < "10" ) {
    //     echo "Have a good day!";
    // }

    if( $t < "10" ) {
        echo "Have a good morning!";
    } elseif( $t < "20" ) {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }


    ?>
    
</body>
</html>