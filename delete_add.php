<?php 

session_start();

include './DB.php';

if (isset($_SESSION["user"])) {

    $pet_id = $_GET["pet_id"];

    $q1 = "SELECT * FROM `add` WHERE `pet_id` = '" . $pet_id . "';";
    $result1 = executeQuery($q1);
    $row1 = mysqli_fetch_assoc($result1);

    $add_id = $row1["add_id"];


    $q2 = "DELETE FROM `pets`.`message` WHERE  `add_id` = '" . $add_id . "';";

    if (executeQuery($q2) === TRUE) {

        $q3 = "DELETE FROM `pets`.`add_report` WHERE  `add_id` = '" . $add_id . "';";

        if (executeQuery($q3) === TRUE) {

            $q4 = "DELETE FROM `pets`.`add_comment` WHERE  `add_id` = '" . $add_id . "';";

            if (executeQuery($q4) === TRUE) {

                $q5 = "DELETE FROM `pets`.`add` WHERE  `pet_id` = '" . $pet_id . "';";

                if (executeQuery($q5) === TRUE) {

                    $q6 = "DELETE FROM `pets`.`pet_feature` WHERE  `pet_id` = '" . $pet_id . "';";

                    if (executeQuery($q6) === TRUE) {

                        $q7 = "SELECT * FROM `pet_photo` WHERE `pet_id` = '" . $pet_id . "';";
                        $result7 = executeQuery($q7);
                        $photo = mysqli_fetch_assoc($result7);

                        $path = $photo["path"];

                        $a = unlink($path);

                        if ($a == TRUE) {
                            
                            $q8 = "DELETE FROM `pets`.`pet_photo` WHERE  `pet_id` = '".$pet_id."';";
                            
                            if(executeQuery($q8) === TRUE){
                                
                                $q9 = "DELETE FROM `pets`.`pet_info` WHERE  `pet_id`='".$pet_id."';";
                                
                                if(executeQuery($q9) === TRUE){
                                    
//                                    header("location:index.php");
                                    
                                }
                                
                            }
                            
                        }
                    }
                }
            }
        }
    }
} else {
    echo "Can not delete this add";
}


?>
