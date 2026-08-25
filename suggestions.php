<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "php_practical"
);

if (!$conn) {

    die("Database connection failed.");

}

$search = $_GET["search"] ?? "";

$sql = "SELECT name
        FROM students
        WHERE name LIKE '%$search%'
        LIMIT 5";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        echo $row["name"] . "<br>";

    }

} else {

    echo "No suggestions found.";

}

mysqli_close($conn);

?>