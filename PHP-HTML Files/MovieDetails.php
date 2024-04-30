<?php
$connect = mysqli_connect('localhost:8889', 'root', 'root', 'Movie');
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

// Loop through each row of data and print desired information
while ($record = mysqli_fetch_assoc($result)) {
    echo '<center><fieldset><h2>Movie Information</h2></center>';
    echo '<center><h3>' . $record['MovieName'] . '</h2></center>';
    echo '<center><p>Duration: ' . $record['MovieDuration'] . '</p></center>';
    echo '<center><p>Genre: ' . $record['MovieGenre'] . '</p></center>';
    echo '<center><p>Release Date: ' . $record['MovieReleaseDate'] . '</p></center>';
    echo '<center><p>IMDB Rating: ' . $record['MovieRating'] . '</p></center>';
    echo '<center><p>Movie ID: ' . $record['MovieID'] . '</p></fieldset></center>';

    // Define SQL query to retrieve actor information for the current movie
    $queryAct = "SELECT ActorFirstName, ActorLastName, ActorID FROM Actor WHERE ActorMovieID = " . $record['MovieID'];

    // Execute the query for actors
    $resultAct = mysqli_query($connect, $queryAct);

    // Check if the query for actors was successful
    if (!$resultAct) {
        die("Error in actor query: " . mysqli_error($connect));
    }

    // Loop through each row of actor data and print desired information
    echo '<br><center><h2>Actor Information</h3></center>';
    while ($actorRecord = mysqli_fetch_assoc($resultAct)) {
        echo '<center><p1>Actor first name: ' . $actorRecord['ActorFirstName'] . '</p1></center><br>';
        echo '<center><p1>Actor last name: ' . $actorRecord['ActorLastName'] . '</p1></center><br>';
        echo '<center><p1>Actor ID: ' . $actorRecord['ActorID'] . '</p1></center><br>';
        echo '<br>';
    }
}
// Close database connection
mysqli_close($connect);
