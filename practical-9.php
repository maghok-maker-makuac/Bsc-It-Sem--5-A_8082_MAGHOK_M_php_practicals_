<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reverse User Array</title>
</head>

<body>

    <!-- HTML Form for User Input -->
    <form method="POST" action="">
        <label for="user_values">Enter values (separated by commas):</label><br>
        <input type="text" id="user_values" name="user_values" placeholder="e.g., Apple, Banana, Cherry" required>
        <button type="submit">Reverse Array</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userInput = $_POST['user_values'];

        $originalArray = array_map('trim', explode(',', $userInput));

        $reversedArray = array_reverse($originalArray);

        echo "<h3>Results:</h3>";
        echo "<p><strong>Original Array:</strong> " . implode(', ', $originalArray) . "</p>";
        echo "<p><strong>Reversed Array:</strong> " . implode(', ', $reversedArray) . "</p>";
    }
    ?>

</body>

</html>