<?php
// Connect to the MySQL database
$connect = mysqli_connect(
    'sql213.infinityfree.com',
    'if0_37236217',
    'qhqinfUbLSV',
    'if0_37236217_http5225'
);

// Create a query
$query = 'SELECT *
    FROM teams
    ORDER BY name';

$result = mysqli_query($connect, $query);

// Output the number of rows
echo 'Rows: ' . mysqli_num_rows($result);

// Loop through each record
while ($record = mysqli_fetch_assoc($result)) {
    // Output each record
    // print_r($record);
    echo '<h2>' . $record['name'] . '</h2>';

    echo '<p>
    League: ' . $record['league'] . '
    <br>
    Rank: ' . $record['rank'] . '
    </p>';

    if ($record['logo']) {
        echo '<img src="images/' . $record['logo'] . '" width="100">';
    }

    echo '<hr>';
}