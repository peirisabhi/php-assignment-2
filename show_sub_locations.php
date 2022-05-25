<?php

$loc = $_GET["loc"];

include './DB.php';


$q = "SELECT * FROM user_sub_location WHERE location_id = '".$loc."';";

$result = executeQuery($q);

$row_count = mysqli_num_rows($result);

for ($x = 0; $x < $row_count; $x++) {
    $row = mysqli_fetch_assoc($result);

    
//    echo "<option value=" . $row["sub_location_id"] . ">" . $row["sub_location"] . "</option>";
     
//    echo "<br/>";
     
     if($x != 0){
         echo "<li><h6 class='blue-text' onclick='n(" . $row["sub_location_id"] . ");'>" . $row["sub_location"] . "</h6></li>";
     }
    
}


?>
