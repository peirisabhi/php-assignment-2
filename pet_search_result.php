
<?php include './header.php';
include './DB.php';
?>

<?php
if (isset($_GET["sub_location"])) {
    $sub_location_id = $_GET["sub_location"];
}

if (isset($_GET["pet"])) {
    $pet = $_GET["pet"];
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <!--matariyalize css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"/>
        <link type="text/css" rel="stylesheet" href="css/materialize.css"/>

        <!--fonts-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="fonts/icofont.css"/>
        <link type="text/css" rel="stylesheet" href="fonts/icofont.min.css"/>

        <!--my css-->
        <link type="text/css" rel="stylesheet" href="css/index.css"/>

        <!--jqueary-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    </head>
    <body>

        <br/>

        <form action="pet_search_result.php" method="GET">
            <div class="container center-align" >
                <div class="col s12 m7">
                    <br>
                    <h3 class="header">Find Your Pet</h3>
                    <div class="card horizontal">
                        <div class="card-stacked">
                            <div class="card-content">
                                <div class="row">
                                    <div class="input-field col s12 m4">
                                        <select class="icons" name="location">
                                            <option value="" disabled selected>Choose your Location</option>
                                            <?php
//                                            include './DB.php';
                                            $q = "SELECT * FROM user_location;";
                                            $result = executeQuery($q);

                                            $row_count = mysqli_num_rows($result);

                                            for ($x = 0; $x < $row_count; $x++) {
                                                $row = mysqli_fetch_assoc($result);

                                                echo "<option value=" . $row["location_id"] . ">" . $row["location"] . "</option>";
                                            }
                                            ?>
                                        </select>
                                        <label>Location</label>
                                    </div>
                                    <div class="input-field col s12 m4">
                                        <select class="icons" name="sub_location">
                                            <option value="" disabled selected>Choose your City</option>
                                            <?php
//                                        include './DB.php';
                                            $q1 = "SELECT * FROM user_sub_location;";
                                            $result1 = executeQuery($q1);

                                            $row_count1 = mysqli_num_rows($result1);

                                            for ($x = 0; $x < $row_count1; $x++) {
                                                $row1 = mysqli_fetch_assoc($result1);

                                                echo "<option value=" . $row1["sub_location_id"] . ">" . $row1["sub_location"] . "</option>";
                                            }
                                            ?>
                                        </select>
                                        <label>City</label>
                                    </div>
                                    <div class="input-field col s12 m4">
                                        <select class="icons" name="pet">
                                            <option value="" disabled selected>Choose your Pet</option>
                                            <option value="cat">Cat</option>
                                            <option value="dog">Dog</option>
                                            <option value="fish">Fish</option>
                                        </select>
                                        <label>Pet</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button class="btn waves-effect waves-light red" type="submit">Search
                                    <i class="material-icons left">search</i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <br/>

        <div class="container" style="width: 85%;">
            <div class="divider gray"></div>
            <br>
            <div class="row">
                <div class="col s3 ">
                
                </div>
                <div class="col s1 "></div>

<!--                                                <div class="col s6">
                                                    <div class=" card horizontal hoverable">
                                                        <div class="card-stacked">
                                                            <div class="card-content">
                                                                <div class="row">
                                                                    <div class="col s12">
                                                                        <img src="images/pet_images/1563934406.png" style="width: 150px; height: 150px; border-radius: 10px; "/>
                                                                        <div style="position: absolute; margin-left: 200px; margin-top: -150px;">
                                                                            <h5 style="line-height: 32px;">sheeba</h5>
                                                                            <h6 style="position: absolute; margin-left: 200px; margin-top: 0px;">brand</h6>
                                                                            <h6 style="position: absolute; margin-left: 200px; margin-top: 30px;">Age</h6>
                                                                            <h6>Location</h6>
                                                                            <h6>Gender</h6>
                                                                            <h6 style="">RS.5000.00</h6>
                                                                            <span style="position: absolute; margin-top: 15px; margin-left: -190px;">4 mins</span>
                                                                            <a class="btn red"><i class="material-icons">edit</i></a>
                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                            <a class="btn red right"><i class="material-icons">delete</i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>-->


                <?php
                $q3 = "SELECT * FROM `add` WHERE `pet_type` = '" . $pet . "' && `sub_location_id` = '" . $sub_location_id . "';";

                $result2 = executeQuery($q3);

                $row_count2 = mysqli_num_rows($result2);

                for ($y = 0; $y < $row_count2; $y++) {
                    $row2 = mysqli_fetch_assoc($result2);

                    $pet_id = $row2["pet_id"];
                    $add_id = $row2["add_id"];

                    $q4 = "SELECT * FROM `pet_info` WHERE `pet_id` = '" . $pet_id . "';";
                    $result3 = executeQuery($q4);

                    $pet_info = mysqli_fetch_assoc($result3);

                    $q5 = "SELECT * FROM `pet_photo` WHERE `pet_id` = '" . $pet_id . "';";
                    $result4 = executeQuery($q5);

                    $pet_photo = mysqli_fetch_assoc($result4);


                    echo "<div class='col s6 offset-s4'>
                    <div class=' card horizontal hoverable'>
                        <div class='card-stacked'>
                            <div class='card-content'>
                                <div class='row'>
                                    <div class='col s12'>
                                        <img src='" . $pet_photo["path"] . "' style='width: 150px; height: 150px; border-radius: 10px; '/>
                                        <div style='position: absolute; margin-left: 200px; margin-top: -150px;'>";

                    echo "<a href = 'add_info.php?add_id=".$add_id."'><h5 style='line-height: 32px;'>" . $pet_info["nick_name"] . "</h5></a>";
                    echo "<h6 style='position: absolute; margin-left: 150px; margin-top: 0px;'>" . $pet_info["breed"] . "</h6>";
                    echo "<h6 style='position: absolute; margin-left: 150px; margin-top: 30px;'>" . $pet_info["age"] . "</h6>";
                    echo "<h6>location</h6>";
                    echo "<h6>" . $pet_info["gender"] . "</h6>";
                    echo "<h6 style=''>RS." . $pet_info["price"] . ".00</h6>";
                    echo "<span style='position: absolute; margin-top: 15px; margin-left: -190px;'>".$row2["date"]."</span>";

                    echo "</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
                }
                ?>



            </div>
        </div>




        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
    </body>
</html>
