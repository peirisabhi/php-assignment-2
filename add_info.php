
<?php include './header.php'; ?>
<?php include './DB.php'; ?>

<?php
$add_id = $_GET["add_id"];

$q1 = "SELECT * FROM `add` WHERE `add_id` = '" . $add_id . "';";
$result1 = executeQuery($q1);
$add = mysqli_fetch_assoc($result1);

$pet_id = $add["pet_id"];
$user_id = $add["user_id"];
$sub_location_id = $add["sub_location_id"];
$date = $add["date"];
$phone = $add["phone"];
$pet_type = $add["pet_type"];

$q2 = "SELECT * FROM `pet_info` WHERE `pet_id` = '" . $pet_id . "';";
$result2 = executeQuery($q2);
$pet = mysqli_fetch_assoc($result2);

$pet_for = $pet["pet_for"];
$price = $pet["price"];
$negotable = $pet["negotable"];
$nick_name = $pet["nick_name"];
$breed = $pet["breed"];
$gender = $pet["gender"];
$color = $pet["colour"];
$age = $pet["age"];
$group = $pet["group"];
$traning = $pet["traning_level"];

$q3 = "SELECT * FROM `user` WHERE `user_id` = '" . $user_id . "';";
$result3 = executeQuery($q3);
$user = mysqli_fetch_assoc($result3);

$fname = $user["fname"];
$lanme = $user["lname"];

$q4 = "SELECT * FROM `pet_feature` WHERE `pet_id` = '" . $pet_id . "';";
$result4 = executeQuery($q4);
$pet_feature = mysqli_fetch_assoc($result4);



$about_pet = $pet_feature["about_pet"];

$q5 = "SELECT * FROM `pet_photo` WHERE `pet_id` = '" . $pet_id . "';";
$result5 = executeQuery($q5);
$photo = mysqli_fetch_assoc($result5);
$pet_photo = $photo["path"];


$q6 = "SELECT * FROM `user_sub_location` WHERE `sub_location_id` = '" . $sub_location_id . "';";
$result6 = executeQuery($q6);
$row6 = mysqli_fetch_assoc($result6);

$location_id = $row6["location_id"];
$sub_location = $row6["sub_location"];


$q7 = "SELECT * FROM `user_location` WHERE `location_id` = '" . $location_id . "';";
$result7 = executeQuery($q7);
$row7 = mysqli_fetch_assoc($result7);

$location = $row7["location"];
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

        <!-- Compiled and minified CSS -->
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">-->

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>


    </head>
    <body>

        <br/>
        <br/>
        <br/>
        <br/>
        <br/>

        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="card-panel">
                        <div class="row">
                            <div class="col s12">
                                <h4 style="font-weight: 800;"><?php echo $nick_name; ?></h4>
                                <h5 style="position: absolute; margin-top: -50px; margin-left: 700px; font-weight: 600; color: #4b6584;">RS.<?php echo $price; ?>.00</h5>

                                <span>For</span>
                                <span><?php echo $pet_for; ?></span>
                                <span>by</span>
                                <span><?php
                                    echo $fname;
                                    echo "&nbsp;";
                                    echo $lanme;
                                    ?></span>
                                <span><?php echo $date; ?></span>
                                <span>,</span>
                                <span><?php echo $sub_location; ?></span>
                                <span>,</span>
                                <span><?php echo $location; ?></span>


                                <button class="btn right"><?php echo $phone; ?></button>
                                <a  href="#msg" class="modal-trigger btn right">Message</a>

                                <br/>
                                <br/>
                                <br/>
                                <div class="divider"></div>
                                <br/>

                            </div>

                        </div>

                        <div class="row">
                            <div class="col s7">
                                <img src="<?php echo $pet_photo; ?>" style="width: 500px; height: 500px;"/>
                            </div>
                            <div class="col s5 grey lighten-4">
                                <h5 class="red-text" style="font-weight: 600;">Pet Features</h5>
                                <!--<br/>-->

                                <table>
                                    <tr>
                                        <td>Pet</td>
                                        <td><span><?php echo $pet_type; ?></span></td>
                                    </tr>
                                    <tr>
                                        <td>Breed</td>
                                        <td><span><?php echo $breed; ?></span></td>
                                    </tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td><span><?php echo $gender; ?></span></td>
                                    </tr>
                                    <tr>
                                        <td>Pet For</td>
                                        <td><span><?php echo $pet_for; ?></span></td>
                                    </tr>
                                    <tr>
                                        <td>Age</td>
                                        <td><span><?php echo $age; ?></span></td>
                                    </tr>
                                    <tr>
                                        <td>Group</td>
                                        <td><span><?php echo $group; ?></span></td>
                                    </tr>
                                </table>
                                <h5 class="red-text" style="font-weight: 600;">Owner's comments</h5>
                                <p> <?php echo $about_pet; ?></p>
                            </div>


                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <div class="card-panel">
                        <div class="row">
                            <div class="col s4">
                                <h6 class="red-text">Temperament</h6>
                                <?php
                                if ($pet_feature["protective"] == "1") {
                                    echo "<span>Protective</span>";
                                    echo "<br/>";
                                }

                                if ($pet_feature["playful"] == "1") {
                                    echo "<span>Playful</span>";
                                    echo "<br/>";
                                }

                                if ($pet_feature["affectionate"] == "1") {
                                    echo "<span>Affectionate</span>";
                                    echo "<br/>";
                                }

                                if ($pet_feature["gentle"] == "1") {
                                    echo "<span>Gentle</span>";
                                    echo "<br/>";
                                }
                                ?>

                            </div>
                            <div class="col s4">
                                <h6 class="red-text">Compatibility</h6>

                                <?php
                                if ($pet_feature["kids"] == "1") {
                                    echo "<span>Okay With Kids</span>";
                                    echo "<br/>";
                                }

                                if ($pet_feature["dogs"] == "1") {
                                    echo "<span>Okay With Dogs</span>";
                                    echo "<br/>";
                                }

                                if ($pet_feature["cats"] == "1") {
                                    echo "<span>Okay With Cats</span>";
                                    echo "<br/>";
                                }

                                if ($pet_feature["apartments"] == "1") {
                                    echo "<span>Okay With Apartments</span>";
                                    echo "<br/>";
                                }

                                if ($pet_feature["seniors"] == "1") {
                                    echo "<span>Okay With Seniors</span>";
                                    echo "<br/>";
                                }
                                ?>

                            </div>
                            <div class="col s4">
                                <h6 class="red-text">Training</h6>

                                <?php
                                if ($traning == "well") {
                                    echo "<span>WELL TRAINED</span>";
                                } else {
                                    echo "<span>Has Basic Training</span>";
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s6">
                    <div class="input-field">
                        <input type="text" class="validate" id="comment"/>
                        <label for="comment">Add a comment</label>
                    </div>
                </div>
                <div class="col s2">
                    <button class="btn red" onclick="add(<?php echo $add_id; ?>);">POST</button>
                </div>
                <div class="col s3 offset-s8">
                    <!--<button class="btn btn-flat red white-text">REPORT AD</button>-->
                    <a  href="#report" class="modal-trigger btn right white-text">REPORT AD</a>
                </div>
            </div>
        </div>



        <div id="msg" class="modal modal-fixed-footer">

            <div class="modal-content">

                <h4>To:
                    <?php
                    echo $fname;
                    echo "&nbsp;";
                    echo $lanme;
                    ?>
                </h4>
                <div class="divider"></div>

                <div class="row container">

                    <br/>
                    <br/>
                    <br/>

                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="sendMsg" class="materialize-textarea"></textarea>
                                    <label for="msg">Textarea</label>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <center>
                    <button class="btn btn-large waves-effect waves-green" type="submit" style="width: 200px !important;" onclick="sendMessage(<?php echo $add_id; echo ","; echo $user_id; ?>);">Send</button>
                </center>
            </div>

        </div>
        
        
        
        <div id="report" class="modal modal-fixed-footer">

            <div class="modal-content">

                <h5>
                    Is there something wrong with this ad?
                </h5>
                <div class="divider"></div>

                <br/>

                <div class="row container">

                    <div class="input-field col s12">
                        <select id="reason">
                            <option value="" disabled selected>Reason</option>
                            <option value="1">Item sold/unavailable</option>
                            <option value="2">Fraud</option>
                            <option value="3">Duplicate</option>
                            <option value="4">Spam</option>
                            <option value="5">Wrong category</option>
                            <option value="6">Offensive</option>
                            <option value="7">Other</option>
                        </select>
                        <label>-- Select a reason --</label>
                    </div>

                    <br/>

                    <div class="row">
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="message" class="materialize-textarea"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                    </div>
                    
                    <br>
                    
                    <center>
                        <!--<a class="btn-large" onclick="report();">Button</a>-->
                        <button class="btn-large" onclick="report(<?php echo $pet_id; ?>);">Button</button>
                    </center>

                </div>

            </div>

        </div>


        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script type="text/javascript" src="js/add_comment.js"></script>

    </body>
</html>
