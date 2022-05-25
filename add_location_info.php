<?php
session_start();

$_SESSION["sub_loc_id"] = $_GET["loc"];

echo $_GET["loc"];

echo $_SESSION["sub_loc_id"];

?>