<?php 


//Sets database connection information
$databaseServer="localhost" ;
$databaseUsername="root" ;
$databasePassword='chawla29#$' ;
$databaseName="mysite" ;


try {
    $connect = new PDO("mysql:host=$databaseServer;dbname=$databaseName;charset=utf8", $databaseUsername, $databasePassword);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "Connected successfully";
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


?>