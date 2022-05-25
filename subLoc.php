<?php

include './DB.php';

$sub = $_GET["sub"];
$l = $_GET["l"];

//echo $l;
//echo $sub;

$q = "INSERT INTO user_sub_location(location_id,sub_location) VALUES('".$l."','".$sub."');";

executeQuery($q);

?>

