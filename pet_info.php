<?php

session_start();


include './DB.php';

//pet info
$pet_for = $_POST["pet_for"];
$price = $_POST["price"];
$nick_name = $_POST["nick_name"];
$type = $_POST["type"];
$breed = $_POST["breed"];
$gender = $_POST["gender"];
$color = $_POST["color"];
$age = $_POST["age"];
$group = $_POST["group"];
$traning = $_POST["traning"];

if (isset($_POST["negotable"])) {
    $negotable = $_POST["negotable"];
} else {
    $negotable = 0;
}

//echo $pet_for;
//echo $price;
//echo $nick_name;
//echo $type;
//echo $breed;
//echo $gender;
//echo $color;
//echo $age;
//echo $group;
//echo $traning;
//echo $negotable;
//pet features


if (isset($_POST["protective"])) {
    $protective = $_POST["protective"];
} else {
    $protective = 0;
}

if (isset($_POST["playful"])) {
    $playful = $_POST["playful"];
} else {
    $playful = 0;
}

if (isset($_POST["affection"])) {
    $affection = $_POST["affection"];
} else {
    $affection = 0;
}

if (isset($_POST["gentle"])) {
    $gentle = $_POST["gentle"];
} else {
    $gentle = 0;
}

if (isset($_POST["kids"])) {
    $kids = $_POST["kids"];
} else {
    $kids = 0;
}

if (isset($_POST["dogs"])) {
    $dogs = $_POST["dogs"];
} else {
    $dogs = 0;
}

if (isset($_POST["cats"])) {
    $cats = $_POST["cats"];
} else {
    $cats = 0;
}

if (isset($_POST["apartments"])) {
    $apartments = $_POST["apartments"];
} else {
    $apartments = 0;
}

if (isset($_POST["seniors"])) {
    $seniors = $_POST["seniors"];
} else {
    $seniors = 0;
}

//pet comment

$coment = $_POST["comment"];

//pet owner detailes

if (isset($_POST["contact"])) {
    $contact = $_POST["contact"];
}

if (isset($_POST["location"])) {
    $location = $_POST["location"];
}

echo $_SESSION["sub_loc_id"];

//add pet info

$time = time();

$q1 = "INSERT INTO `pets`.`pet_info` (`pet_for`, `price`, `negotable`, `nick_name`, `type`, `breed`, `gender`, `colour`, `age`, `group`, `traning_level`,`time_id`) "
        . "VALUES ('" . $pet_for . "', '" . $price . "', '" . $negotable . "', '" . $nick_name . "', '" . $type . "', '" . $breed . "', '" . $gender . "', '" . $color . "', '" . $age . "', '" . $group . "', '" . $traning . "','" . $time . "');";



if (executeQuery($q1) === TRUE) {
//    echo "ok";

    $q2 = "SELECT * FROM `pet_info` WHERE `time_id` = '" . $time . "';";
    $result2 = executeQuery($q2);
    $row = mysqli_fetch_assoc($result2);
    $pet_id = $row["pet_id"];

//    add pet featuers

    $q3 = "INSERT INTO `pets`.`pet_feature` (`protective`, `playful`, `affectionate`, `gentle`, `kids`, `dogs`, `cats`, `apartments`, `seniors`, `about_pet`, `pet_id`)"
            . " VALUES ('" . $protective . "', '" . $playful . "', '" . $affection . "', '" . $gentle . "', '" . $kids . "', '" . $dogs . "', '" . $cats . "', '" . $apartments . "', '" . $seniors . "', '" . $coment . "', '".$pet_id."');";



    if (executeQuery($q3) === TRUE) {

        if (isset($_FILES["image"])) {
            $photo = $_FILES["image"];


            $tmp_path = $photo["tmp_name"];
            $new_path = "./images/pet_images/" . time() . ".png";

            move_uploaded_file($tmp_path, $new_path);
            
            $db_path = "images/pet_images/" . time() . ".png";

            $q4 = "INSERT INTO `pets`.`pet_photo`(`pet_id`, `path`) VALUES('" . $pet_id . "', '" . $db_path . "');";
            



            if (executeQuery($q4) === TRUE) {

                $user_id = $_SESSION["user"];
                $sub_location_id = $_SESSION["sub_loc_id"];
                
                $date = date('Y-m-d H:i:s');
                
                $q5 = "INSERT INTO `pets`.`add` (`pet_id`, `user_id`, `sub_location_id`, `date`, `phone`, `pet_type`)"
                        . " VALUES ('".$pet_id."', '".$user_id."', '".$sub_location_id."', NOW(), '".$contact."','".$type."');";
                
                executeQuery($q5);
                
                echo "successful";
            }  else {
                echo "photo uploading error";
            }
        }
    } else {
        echo "features adding error";
    }
} else {
    echo "pet id getting error ";
}




?>