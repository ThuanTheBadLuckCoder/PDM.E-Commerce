<?php
$serverName = "DESKTOP-7C6DTMO\MSSQLSERVER01";
$database = "mydata";
$uid = "";
$pass = "";

$connection = [
    "Database" => $database,
    "Uid" => $uid,
    "PWD" => $pass,
    ];
$con = sqlsrv_connect($serverName,$connection);
if(!$con)
    die(print_r(sqlsrv_errors(),true));
else
    echo 'connection established';
?>