<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>Determining Month Using If...Else Chain</h3>
    <?php

    $monthNumber = date('n');

    if ($monthNumber == 1) {
        echo "Current month is January.<br>";
    } else if ($monthNumber == 2) {
        echo "Current month is February.<br>";
    } else if ($monthNumber == 3) {
        echo "Current month is March.<br>";
    } else if ($monthNumber == 4) {
        echo "Current month is April.<br>";
    } else if ($monthNumber == 5) {
        echo "Current month is May.<br>";
    } else if ($monthNumber == 6) {
        echo "Current month is June.<br>";
    } else if ($monthNumber == 7) {
        echo "Current month is July.<br>";
    } else if ($monthNumber == 8) {
        echo "Current month is August.<br>";
    } else if ($monthNumber == 9) {
        echo "Current month is September.<br>";
    } else if ($monthNumber == 10) {
        echo "Current month is October.<br>";
    } else if ($monthNumber == 11) {
        echo "Current month is November.<br>";
    } else if ($monthNumber == 12) {
        echo "Current month is December.<br>";
    } else {
        echo "Invalid month.<br>";
    }
    ?>

    <h3>Determining Month Using Switch Case</h3>
    <?php

    $monthNumber = date('n');

    switch ($monthNumber) {
        case 1:
            echo "Current month is January.<br>";
            break;
        case 2:
            echo "Current month is February.<br>";
            break;
        case 3:
            echo "Current month is March.<br>";
            break;
        case 4:
            echo "Current month is April.<br>";
            break;
        case 5:
            echo "Current month is May.<br>";
            break;
        case 6:
            echo "Current month is June.<br>";
            break;
        case 7:
            echo "Current month is July.<br>";
            break;
        case 8:
            echo "Current month is August.<br>";
            break;
        case 9:
            echo "Current month is September.<br>";
            break;
        case 10:
            echo "Current month is October.<br>";
            break;
        case 11:
            echo "Current month is November.<br>";
            break;
        case 12:
            echo "Current month is December.<br>";
            break;
        default:
            echo "Invalid month.<br>";
            break;
    }
    ?>

</body>

</html>