<?php
// Establish database connection
$connect = mysqli_connect('localhost:8889', 'root', 'root', 'Movie');

// Check if the connection was successful
if (!$connect) {
    die("Error: " . mysqli_connect_error());
}

// Define SQL query to retrieve movie information
$query = 'SELECT * FROM Movie';

// Execute the query
$result = mysqli_query($connect, $query);

// Check if the query was successful
if (!$result) {
    die("Error in query: " . mysqli_error($connect));
}

// Loop through each row of data and print director information for each movie
while ($record = mysqli_fetch_assoc($result)) {
    echo '<center></center>';
    echo '<center><h2>' . $record['MovieName'] . '</h2></center>';
    echo '<center><h3>Director Information</h3></center>';

    // Define SQL query to retrieve director information for the current movie
    $queryDirect = "SELECT * FROM Director WHERE DirectorID = " . $record['DirectorMovieID'];

    // Execute the query for directors
    $resultDirect = mysqli_query($connect, $queryDirect);

    // Check if the query for directors was successful
    if (!$resultDirect) {
        die("Error in director query: " . mysqli_error($connect));
    }

    // Loop through each row of director data and print desired information
    while ($directorRecord = mysqli_fetch_assoc($resultDirect)) {
        echo '<center><p>Director Name: ' . $directorRecord['DirectorFirstName'] . ' ' . $directorRecord['DirectorLastName'] . '</p></center>';
        echo '<center><p>Director ID: ' . $directorRecord['DirectorID'] . '</p></center>';
        echo '<center><p>Director Age: ' . $directorRecord['DirectorAge'] . '</p></center>';
        echo '<center><p>Director Gender: ' . $directorRecord['DirectorGender'] . '</p></center>';
        echo '<hr>';
    }

    echo '<br>';
}

// Close database connection
mysqli_close($connect);
