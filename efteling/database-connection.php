<?php
$servername = "localhost";
$dbname = "efteling";
$cusername = "root";
$cpassword = "";

try
{
    $conn = new PDO("mysql:host=$servername; dbname=$dbname",
        $cusername, $cpassword);
    $conn->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connectie gelukt";
}
catch(PDOException $e)
{
    echo "Connectie mislukt: "  .   $e->getMessage();
}