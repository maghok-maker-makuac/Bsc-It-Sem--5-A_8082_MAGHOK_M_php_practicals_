<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practical-1</title>
</head>

<body>
    <?php

    define("SEMESTER", "Semester 4");
    define("MIN_PASS_MARKS", 50);


    $student_name = "Maghok Maker";
    $course_name = "Information Technology (IT)";


    $python = 85;
    $ooad = 78;
    $computerNetworks = 50;
    $appliedMaths = 62;


    $total_marks = $python + $ooad + $computerNetworks + $appliedMaths;
    $total = 400;
    $percentage = ($total_marks / $total) * 100;


    $status = "PASS";
    if (
        $python < MIN_PASS_MARKS || $ooad < MIN_PASS_MARKS ||
        $computerNetworks < MIN_PASS_MARKS || $appliedMaths < MIN_PASS_MARKS
    ) {
        $status = "FAIL";
    }


    echo "<h2>" . SEMESTER . " Results</h2>";
    echo "<strong>Student:</strong> $student_name <br>";
    echo "<strong>Course:</strong> $course_name <br><br>";

    echo "<strong>Subject Scores:</strong><br>";
    echo "Web Technologies: $python <br>";
    echo "Database Management: $ooad <br>";
    echo "Java Programming: $computerNetworks <br>";
    echo "Data Structures: $appliedMaths <br><br>";

    echo "<strong>Total Marks:</strong> $total_marks / $total <br>";
    echo "<strong>Percentage:</strong> " . number_format($percentage, 2) . "% <br>";
    echo "<strong>Result Status:</strong> $status";
    ?>

</body>

</html>