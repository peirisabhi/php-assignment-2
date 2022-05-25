<?php include './header.php'; ?>

<?php
include './DB.php';
$add_id = $_GET["add_id"];

$q1 = "SELECT * FROM `add` WHERE `add_id` = '" . $add_id . "';";
$result1 = executeQuery($q1);
$row1 = mysqli_fetch_assoc($result1);

$pet_id = $row1["pet_id"];
$subLocId = $row1["sub_location_id"];
$phone = $row1["phone"];


$q2 = "SELECT * FROM `pet_info` WHERE `pet_id` = '" . $pet_id . "';";
$result2 = executeQuery($q2);
$pet_info = mysqli_fetch_assoc($result2);


$q3 = "SELECT * FROM `pet_feature` WHERE `pet_id` = '" . $pet_id . "';";
$result3 = executeQuery($q3);
$pet_feature = mysqli_fetch_assoc($result3);


$q4 = "SELECT * FROM `pet_photo` WHERE `pet_id` = '" . $pet_id . "';";
$result4 = executeQuery($q4);
$pet_photo = mysqli_fetch_assoc($result4);


$q5 = "SELECT * FROM `pets`.`user_sub_location` WHERE `sub_location_id` = '".$subLocId."';";
$result5 = executeQuery($q5);
$location = mysqli_fetch_assoc($result5);

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

        <!-- Compiled and minified JavaScript -->
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>-->



    </head>
    <body>

        <br/>

        <div class="container">
            <div>
                <div class="col s12">
                    <div class="card-panel">
                        <h4 class="red-text">Information About Your Pet</h4>
                        <br/>
                        <div class="divider"></div>
                        <br/>
                        <div class="row">
                            <div class="col s6 input-field">
                                <select id="pet_for" name="pet_for">
                                    <option value="" disabled>Pet For</option>
                                    <option value="engage" <?PHP
                                    if ($pet_info["pet_for"] == "engage") {
                                        echo "selected";
                                    }
                                    ?>>Engage
                                    </option>
                                    <option value="sell" <?PHP
                                    if ($pet_info["pet_for"] == "sell") {
                                        echo "selected";
                                    }
                                    ?>>Sell
                                    </option>
                                    <option value="buy" <?PHP
                                    if ($pet_info["pet_for"] == "buy") {
                                        echo "selected";
                                    }
                                    ?>>Buy
                                    </option>
                                </select>
                                <label for="pet_for">Pet For</label>
                            </div>
                            <div class="col s3 input-field">
                                <input type="number" id="price" class="validate" name="price" value="<?php echo $pet_info["price"]; ?>.00"/>
                                <label for="price">Price</label>
                            </div>
                            <label>
                                <input type="checkbox" name="negotable" value="1" <?php
                                if ($pet_info["negotable"] == 1) {
                                    echo "checked='checked'";
                                }
                                ?> />
                                <span>negotiable</span>
                            </label>
                        </div>

                        <div class="row">
                            <div class="col s6 input-field">
                                <input type="text" id="nick_name" class="validate" name="nick_name" value="<?php echo $pet_info["nick_name"]; ?>" />
                                <label for="nick_name">Nick Name</label>
                            </div>
                            <div class="col s6 input-field">
                                <select id="pet_type" name="type">
                                    <option value="" disabled>Pet Type</option>
                                    <option value="cat" <?PHP
                                    if ($pet_info["type"] == "cat") {
                                        echo "selected";
                                    }
                                    ?> >Cat</option>
                                    <option value="dog" <?PHP
                                    if ($pet_info["type"] == "dog") {
                                        echo "selected";
                                    }
                                    ?> >Dog</option>
                                    <option value="fish" <?PHP
                                    if ($pet_info["type"] == "fish") {
                                        echo "selected";
                                    }
                                    ?> >Fish</option>
                                </select>
                                <label for="pet_type">Pet Type</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s6 input-field">
                                <input type="text" id="breed" class="validate" name="breed" value="<?php echo $pet_info["breed"]; ?>" />
                                <label for="breed">Breed</label>
                            </div>
                            <div class="col s6 input-field">
                                <select id="gender" name="gender">
                                    <option value="" disabled>Gender</option>
                                    <option value="male" <?PHP
                                    if ($pet_info["gender"] == "male") {
                                        echo "selected";
                                    }
                                    ?> >Male</option>
                                    <option value="female" <?PHP
                                    if ($pet_info["gender"] == "female") {
                                        echo "selected";
                                    }
                                    ?> >Female</option>
                                    <option value="pair" <?PHP
                                    if ($pet_info["gender"] == "pair") {
                                        echo "selected";
                                    }
                                    ?> >pair</option>
                                </select>
                                <label for="gender">Gender</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s6 input-field">
                                <select id="color" name="color">
                                    <option value="" disabled>Colour</option>
                                    <option value="black" <?PHP
                                    if ($pet_info["colour"] == "black") {
                                        echo "selected";
                                    }
                                    ?> >Black</option>
                                    <option value="brown" <?PHP
                                    if ($pet_info["colour"] == "brown") {
                                        echo "selected";
                                    }
                                    ?> >Brown</option>
                                    <option value="gray" <?PHP
                                    if ($pet_info["colour"] == "gray") {
                                        echo "selected";
                                    }
                                    ?> >Gray</option>
                                    <option value="white" <?PHP
                                    if ($pet_info["colour"] == "white") {
                                        echo "selected";
                                    }
                                    ?> >White</option>
                                </select>
                                <label for="color">Colour</label>
                            </div>
                            <div class="col s6 input-field">
                                <select id="age" name="age">
                                    <option value="" disabled>Age</option>
                                    <option value="1" <?PHP
                                    if ($pet_info["age"] == "1") {
                                        echo "selected";
                                    }
                                    ?> >1</option>
                                    <option value="2" <?PHP
                                    if ($pet_info["age"] == "2") {
                                        echo "selected";
                                    }
                                    ?> >2</option>
                                    <option value="3" <?PHP
                                    if ($pet_info["age"] == "3") {
                                        echo "selected";
                                    }
                                    ?> >3</option>
                                    <option value="4" <?PHP
                                    if ($pet_info["age"] == "4") {
                                        echo "selected";
                                    }
                                    ?> >4</option>
                                    <option value="5" <?PHP
                                    if ($pet_info["age"] == "5") {
                                        echo "selected";
                                    }
                                    ?> >5</option>
                                    <option value="over5" <?PHP
                                    if ($pet_info["age"] == "over5") {
                                        echo "selected";
                                    }
                                    ?> >Over 5 Years</option>
                                </select>
                                <label for="age">age</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s6 input-field">
                                <select id="group" name="group">
                                    <option value="" disabled>Group</option>
                                    <option value="baby" <?PHP
                                    if ($pet_info["group"] == "baby") {
                                        echo "selected";
                                    }
                                    ?> >Baby</option>
                                    <option value="young" <?PHP
                                    if ($pet_info["group"] == "young") {
                                        echo "selected";
                                    }
                                    ?> >Young</option>                        
                                    <option value="adult" <?PHP
                                    if ($pet_info["group"] == "adult") {
                                        echo "selected";
                                    }
                                    ?> >Adult</option>
                                    <option value="senior" <?PHP
                                    if ($pet_info["group"] == "senior") {
                                        echo "selected";
                                    }
                                    ?> >Senior</option>
                                </select>
                                <label for="group">Group</label>
                            </div>
                            <div class="col s6 input-field">
                                <select id="training_level" name="traning">
                                    <option value="" disabled>Training Level</option>
                                    <option value="basic" <?PHP
                                    if ($pet_info["traning_level"] == "basic") {
                                        echo "selected";
                                    }
                                    ?> >Has Basic Training</option>
                                    <option value="well" <?PHP
                                    if ($pet_info["traning_level"] == "well") {
                                        echo "selected";
                                    }
                                    ?> >Well Trained</option>
                                </select>
                                <label for="age">Training Level</label>
                            </div>
                        </div>

                        <br/>
                        <div class="divider"></div>
                        <br/>

                        <h4 class="red-text">Pet Features</h4>

                        <h5>Temprament</h5>
                        <div class="row">
                            <div class="col s12">
                                <br/>
                                <label>
                                    <input type="checkbox" name="protective" value="1" <?php
                                    if ($pet_feature["protective"] == 1) {
                                        echo "checked='checked'";
                                    }
                                    ?> />
                                    <span>Protective</span>
                                </label>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label>
                                    <input type="checkbox" name="playful" value="1" <?php
                                    if ($pet_feature["playful"] == 1) {
                                        echo "checked='checked'";
                                    }
                                    ?> />
                                    <span>Playful</span>
                                </label>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label>
                                    <input type="checkbox" name="affection" value="1" <?php
                                    if ($pet_feature["affectionate"] == 1) {
                                        echo "checked='checked'";
                                    }
                                    ?> />
                                    <span>Affectionate</span>
                                </label>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label>
                                    <input type="checkbox" name="gentle" value="1" <?php
                                    if ($pet_feature["gentle"] == 1) {
                                        echo "checked='checked'";
                                    }
                                    ?> />
                                    <span>Gentle</span>
                                </label>
                            </div>
                        </div>
                        <br/>
                        <!--<br/>-->
                        <h5>Compatibility</h5>
                        <div class="row">
                            <div class="col s12">
                                <br/>
                                <label>
                                    <input type="checkbox" name="kids" value="1" <?php
                                    if ($pet_feature["kids"] == 1) {
                                        echo "checked='checked'";
                                    }
                                    ?> />
                                    <span>Okay With Kids</span>
                                </label>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label>
                                    <input type="checkbox" name="dogs" value="1" <?php
                                    if ($pet_feature["dogs"] == 1) {
                                        echo "checked='checked'";
                                    }
                                    ?> />
                                    <span>Okay With Dogs</span>
                                </label>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label>
                                    <input type="checkbox" name="cats" value="1" <?php
                                    if ($pet_feature["cats"] == 1) {
                                        echo "checked='checked'";
                                    }
                                    ?> />
                                    <span>Okay With Cats</span>
                                </label>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label>
                                    <input type="checkbox" name="apartments" value="1" <?php
                                    if ($pet_feature["apartments"] == 1) {
                                        echo "checked='checked'";
                                    }
                                    ?> />
                                    <span>Okay With Apartments</span>
                                </label>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label>
                                    <input type="checkbox" name="seniors" value="1" <?php
                                    if ($pet_feature["seniors"] == 1) {
                                        echo "checked='checked'";
                                    }
                                    ?> />
                                    <span>Okay With Seniors</span>
                                </label>
                            </div>
                        </div>

                        <div class="section">
                            <h5>More About Your Pet</h5>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="textarea2" class="materialize-textarea" data-length="120" name="comment"><?php echo $pet_feature["about_pet"]; ?></textarea>
                                <label for="textarea2">Textarea</label>
                            </div>
                        </div>

                        <div class="section">
                            <h5>Upload Image</h5>
                        </div>

                        <div class="row">
                            <diV class="col s4">
                                <div class="file-field input-field ">
                                    <div class="btn grey">
                                        <span>File</span>
                                        <input type="file" name="image" onchange="view(event);" id="imgPath">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text"  >
                                    </div>
                                </div>
                            </diV>
                            <div class="col s1"></div>
                            <div class="col s4">
                                <img src="<?php echo $pet_photo["path"]; ?>" style="width: 180px; height: 200px;" id="imgField"/>
                            </div>
                        </div>

                        <div class="section">
                            <h5>Pet Owner Details</h5>
                        </div>

                        <div class="row">
                            <div class="col s4 input-field">
                                <input type="text" id="contact" class="validate" name="contact" value="<?php echo $phone; ?>"/>
                                <label for="contact">Phone E.G=03XXXXXXX</label>
                            </div>

                            <div class="col s3 input-field ">
                                <a class=" btn-large modal-trigger" href="#selectLocation">Select Your Location</a>
                            </div>

                            <div class="col s4">
                                <div class="input-field">
                                    <input type="text" class="validate" id="location" value="<?php echo $location["sub_location"]; ?>"/>
                                    <label for="location">Location</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <button class="btn-large waves-effect waves-light red" type="submit">UPDATE
                            </button>

                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div id="selectLocation" class="modal modal-fixed-footer">

            <!--<form action="insert_add_location" method="POST">-->

            <div class="modal-content">

                <h3 class="center-align">Select Your Location</h3>

                <div class="container">
                    <div class="row">
                        <div class="col s6">
                            <h6>select Your Division</h6>
                        </div>
                        <div class="col s6">
                            <h6>select Your City</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s6">
                            <ul>
                                <?php
                                $result = executeQuery("SELECT * FROM user_location;");

                                $row_count = mysqli_num_rows($result);

                                for ($x = 0; $x < $row_count; $x++) {
                                    $row = mysqli_fetch_assoc($result);

                                    echo "<li><h6 class='blue-text' onclick='m(" . $row["location_id"] . ");'>" . $row["location"] . "</h6></li>";
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="col s6">
                            <ul id="sublocation"></ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-flat waves-effect waves-green right" type="submit" onclick="addLocation();">Submit
                </button>
                <button class="btn btn-flat waves-effect waves-red right" type="reset">Cancel
                </button>

            </div>
            <!--</form>-->
        </div>





        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script type="text/javascript" src="js/img_view.js"></script>
        <script type="text/javascript" src="js/sub_location_load.js"></script>
        <script type="text/javascript" src="js/add_location_select.js"></script>
        <script type="text/javascript" src="js/add_location_info.js"></script>

    </body>
</html>
