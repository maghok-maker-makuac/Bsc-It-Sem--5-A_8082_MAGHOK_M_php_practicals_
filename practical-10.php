<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $onlineUsers_arr = ["maghok", "maker", "makuac"];
    $aofflineUsers_arr = ["emmy", "jona"];

    $result = array_merge($onlineUsers_arr, $aofflineUsers_arr);

    print_r($result);
    ?>

</body>

</html>