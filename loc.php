<?php

include './DB.php';


$loc = $_GET["l"];


$q = "INSERT INTO user_location(location) VALUES('".$loc."');";

executeQuery($q);

?>

