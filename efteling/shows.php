<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<a href="index.php">go back</a>
</body>
</html>
<?php

include "server.php";

$json = file_get_contents('http://ginootten.nl/vopro/data.txt');
$obj = json_decode($json);

foreach($obj->AttractionInfo AS $attraction )
{
    if($attraction->Type != 'Show') { continue; }
    echo "<form class='lists'>";
    echo $attraction->Id . "<br>";
    echo "</form>";
}