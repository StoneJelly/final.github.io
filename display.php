<?php
require("conn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emotions Table</title>
</head>
<body>

<?php
// Display the table data
$sql_display = "SELECT * FROM emotions";
$res_display = mysqli_query($con, $sql_display);

echo "<table>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Age</th>";
echo "<th>Email</th>";
echo "<th>Emotion</th>";
echo "</tr>";

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

echo "</table>";

mysqli_close($con); // Close the database connection

?>

</body>
</html>
