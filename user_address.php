<?php
session_start();

include './DB.php';

$locId = $_GET["locId"];
$subLocId = $_GET["subLocId"];
$street = $_GET["street"];
$address = $_GET["address"];
$gender = $_GET["gender"];
$dob = $_GET["dob"];
$contact = $_GET["contact"];

$user = $_SESSION["user"];





//echo $locId;
//echo $subLocId;
//echo $street;
//echo $address;

$q = "INSERT INTO user_address(location_id,sub_location_id,street,address,user_id) VALUES('".$locId."','".$subLocId."','".$street."','".$address."','".$user."');";

executeQuery($q);


$q2 = "SELECT * FROM user_address WHERE user_id = '".$user."';";

$result2 = executeQuery($q2);

$row_count = mysqli_num_rows($result2);
if($row_count>0){
    $row = mysqli_fetch_assoc($result2);
    $user_address_id = $row["address_id"];
    echo $user_address_id;
    
    $q3 = "INSERT INTO user_data(user_id,address_id,gender,dob,phone) VALUES('".$user."','".$user_address_id."','".$gender."','".$dob."','".$contact."');";
    executeQuery($q3);
    
    echo "Success";
    
}  else {
    echo "error";
}

?>

