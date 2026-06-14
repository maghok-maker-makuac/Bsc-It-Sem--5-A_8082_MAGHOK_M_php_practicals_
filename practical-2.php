<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<h2> Find the MAAX and the MIN <br><br>";
    $semester_marks = [85, 78, 45, 62, 95, 38];

    $highest_mark = max($semester_marks);
    $lowest_mark = min($semester_marks);
    echo "<h4> Highest Mark: $highest_mark <br>";
    echo "<h4> Lowest Mark: $lowest_mark";

    ?>
</body>

</html>