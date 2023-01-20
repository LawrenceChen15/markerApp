<?php
echo "";

$host="localhost";
$dbUser="root";
$dbPwd="";
$dbName="markerApp";

//connect to the database
$sqlConn = new mysqli($host, $dbUser, $dbPwd, $dbName);
                   
//if error die                   
if ($sqlConn->connect_errno) {
    die("Failed to connect to DB due to error: " . $mysqli->connect_error);
}

return $sqlConn;