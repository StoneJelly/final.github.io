<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save Data to Database</title>
</head>
<body>
    <?php
    require("conn.php");

    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $finalEmotion = $_POST['finalEmotion'];

    $sql_insert = "INSERT INTO emotions (name, age, email, emotion) VALUES ('$name', '$age', '$email', '$finalEmotion')";
    $res = mysqli_query($con, $sql_insert);
    ?>

    <?php
    // Display the table data
    $sql_display = "SELECT * FROM emotions";
    $res_display = mysqli_query($con, $sql_display);
    ?>

    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Emotion</th>
        </tr>

        <?php
        while ($row = mysqli_fetch_array($res_display)) {
            $data_name = $row['name'];
            $data_age = $row['age'];
            $data_email = $row['email'];
            $data_emotion = $row['emotion'];

            echo "<tr>";
            echo "<td>$data_name</td>";
            echo "<td>$data_age</td>";
            echo "<td>$data_email</td>";
            echo "<td>$data_emotion</td>";
            echo "</tr>";
        }
        ?>

    </table>
</body>
</html>
