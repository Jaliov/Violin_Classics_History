<?php

// Set DSN (Data Source Name)
// Local connection
// $host = 'localhost';

// $username = 'root';

// $password = 'Ritter*1734!';

// $options = [];

// $dbname = 'great_musicians';

// $dsn = 'mysql:host='.$host . ';dbname=' . $dbname;

//Heroku connection
$host = 'us-cdbr-east-03.cleardb.com';

$username = 'b823ebdba10252';

$password = '5b0ff370';

$options = [];

$dbname = 'heroku_f67f9289f8a7d06';

$dsn = 'mysql:host='.$host . ';dbname=' . $dbname;

try{
    $connection = new PDO($dsn, $username, $password, $options); 
    echo "<p class ='text-secondary'>PDO</p>";

} catch(PDOException $e) {
    echo '<p class ="text-light">There was an unexpected error</p>';
}


?>