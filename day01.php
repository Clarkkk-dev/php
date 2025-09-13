<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Day 01</title>
</head>

<body>
    <?php

    //Data Declaration
    $crush = "Claire Mendoza";

    //While Loop
    $i = 1;
    while ($i <= 10) {
        echo "I Love You $crush $i x <br>";
        $i++;
    }

    echo "<br>";

    //Problem Solving #1

    $num = 1;
    $tempTotal = 0;

    while ($num <= 50) {

        if ($num % 2 == 0) {
            $tempTotal += $num;
        }

        $num++;
    }

    echo "The sum of even numbers from 1 to 50 is " . $tempTotal;
    ?>
</body>

</html>