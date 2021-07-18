<!DOCTYPE html>
<html lang="en">

<head>

    <title>Direction</title>
</head>

<body>
    <?php

    $conn = new mysqli('localhost', 'root', '', 'Control_Base');
    error_reporting(E_ALL & ~E_NOTICE);
    ini_set('display_errors', 1);


    $stmt = $conn->prepare("SELECT  * FROM Base ORDER BY id DESC LIMIT 1 ;");
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        echo "Direction= " . $row["Dierction"];
    }


    ?>

</body>

</html>