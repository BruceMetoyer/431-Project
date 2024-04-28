<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Bruce Metoyer, Udoka Ndolo, Gregory Walters, Kevin Eliasmejia">
    <meta name="description" content="This page contains multiple 
    websites along with information from tables such as
    actors, diretors, genre, and movie.">

    <title>Movie Website</title>
    <link rel="stylesheet" href="main.css" type="text/css">
</head>

<body>
    <h1>Movie Website!</h1>
    <hr>
    <p>This page contains multiple
        popular movies along with crucial information from tables such as
        the actors in the movies, diretor of each movie and the genre of each movie.</p>
    <hr>
    <h2>Actor Table!</h2>
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

    // Loop through each row of data and print it for the Actor table
    while ($record = mysqli_fetch_assoc($resultA)) {
        echo '<pre>';
        print_r($record);
        echo '</pre>';

        echo '<h2>' . $record['name'] . '</h2>';
    }

    // Execute the query for the Director table
    $resultB = mysqli_query($connect, $queryB);
    if (!$resultB) {
        die("Error in query B: " . mysqli_error($connect));
    }

    // Print the number of rows returned by the query for the Director table
    echo ' The director table has ' . mysqli_num_rows($resultB) . ' rows.';

    // Loop through each row of data and print it for the Director table
    while ($record = mysqli_fetch_assoc($resultB)) {
        echo '<pre>';
        print_r($record);
        echo '</pre>';

        echo '<h2>' . $record['name'] . '</h2>';
    }

    // Execute the query for the Genre table
    $resultC = mysqli_query($connect, $queryC);
    if (!$resultC) {
        die("Error in query C: " . mysqli_error($connect));
    }

    // Print the number of rows returned by the query for the Genre table
    echo ' The genre table has ' . mysqli_num_rows($resultC) . ' rows.';

    // Loop through each row of data and print it for the Genre table
    while ($record = mysqli_fetch_assoc($resultC)) {
        echo '<pre>';
        print_r($record);
        echo '</pre>';

        echo '<h2>' . $record['name'] . '</h2>';
    }

    // Execute the query for the Movie table
    $resultD = mysqli_query($connect, $queryD);
    if (!$resultD) {
        die("Error in query D: " . mysqli_error($connect));
    }

    // Print the number of rows returned by the query for the Movie table
    echo ' The movie table has ' . mysqli_num_rows($resultD) . ' rows.';

    // Loop through each row of data and print it for the Movie table
    while ($record = mysqli_fetch_assoc($resultD)) {
        echo '<pre>';
        print_r($record);
        echo '</pre>';

        echo '<h2>' . $record['title'] . '</h2>';
    }

    ?>
</body>

</html>
