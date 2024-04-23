<!doctype html>
<html>
    <head>
        <title>PHP, SQL, and MySQL</title>
    </head>
    <body>
        <h1>PHP, SQL, and MySQL</h1>
        <?php

        $connect = mysqli_connect("localhost:8889","root","root","Movie");
        if(!$connect){
            die("Error". mysqli_connect_error());
        }
        else
        echo 'connection established';

        $queryA = 'SELECT * FROM `Actor';
        $queryB = 'SELECT * FROM `Director';
        $queryC = 'SELECT * FROM `Director';
        $queryD = 'SELECT * FROM `Genre';
        $queryE = 'SELECT * FROM `Movie';
        $result = mysqli_query($connect, $queryA);

        echo mysqli_num_rows( $result );

        while( $record = mysqli_fetch_assoc( $result ) )
        {
            echo '<prev';
            print_r( $record );
            echo '</prev>';

            echo '<h2>'.$record['name'].'</h2>';
        }

        ?>

    </body>
</html>
