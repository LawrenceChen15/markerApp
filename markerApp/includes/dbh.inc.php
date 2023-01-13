<?php
echo "";

$host="localhost";
$dbUser="root";
$dbPwd="";
$dbName="markerApp";

$sqlConn = new mysqli($host, $dbUser, $dbPwd, $dbName);
                   
                     
if ($sqlConn->connect_errno) {
    die("Failed to connect to DB due to error: " . $mysqli->connect_error);
}

return $sqlConn;