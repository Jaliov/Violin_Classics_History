<?php

//Set DSN (Data Source Name)

$host = 'localhost';

$username = 'root';

$password = 'Ritter*1734!';

$options = [];

$dbname = 'great_musicians';

$dsn = 'mysql:host='.$host . ';dbname=' . $dbname;


try{
    $connection = new PDO($dsn, $username, $password, $options); //data source name
    echo '<p class ="text-light">connected</p>';

} catch(PDOException $e) {
    echo '<h3 class ="text-light">There was an unexpected error</h3>';
}


?>