<?php

//Set DSN (Data Source Name)

$host = 'localhost';

$username = 'root';

$password = '';

$options = [];

$dbname = 'company';

$dsn = 'mysql:host='.$host . ';dbname=' . $dbname;


try{
    $connection = new PDO($dsn, $username, $password, $options); //data source name
    echo '<p class ="text-light">Connected</p>';

} catch(PDOException $e) {

    echo "Something wrong";
}


?>