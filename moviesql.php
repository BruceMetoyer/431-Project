<!DOCTYPE html>
<html>
<head>
    <title>PHP, SQL, and MySQL</title>
</head>
<body>
    <h1>PHP, SQL, and MySQL</h1>
    <?php

    $connect = mysqli_connect('localhost:8889', 'root', 'root', 'Movie');
    if (!$connect) {
        die("Error: " . mysqli_connect_error());
    } else {
        echo 'Connection established';
    }

    // Define SQL queries without single quotes
    $queryA = 'SELECT * FROM Actor';
    $queryB = 'SELECT * FROM Director';
    $queryC = 'SELECT * FROM Genre';
    $queryD = 'SELECT * FROM Movie';

    // Execute the query for the Actor table
    $resultA = mysqli_query($connect, $queryA);
    if (!$resultA) {
        die("Error in query A: " . mysqli_error($connect));
    }

    // Print the number of rows returned by the query for the Actor table
    echo ' The actor table has ' . mysqli_num_rows($resultA) . ' rows.';

    // Loop through each row of data and print it
    while ($record = mysqli_fetch_assoc($resultA)) {
        echo '<pre>';
        print_r($record);
        echo '</pre>';

        echo '<h2>' . $record['name'] . '</h2>';
    }

    // You can repeat the above process for other tables (Director, Genre, Movie) using similar code

    ?>
</body>
</html>
