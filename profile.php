

<?php include './header.php'; ?>
<?php include './DB.php'; ?>

<?php
$result1 = executeQuery("SELECT * FROM `user` WHERE `user_id` = '" . $_SESSION['user'] . "';");
$user = mysqli_fetch_assoc($result1);

$result2 = executeQuery("SELECT * FROM `user_data` WHERE `user_id` = '" . $user["user_id"] . "';");
$user_data = mysqli_fetch_assoc($result2);

$result3 = executeQuery("SELECT * FROM `user_address` WHERE `user_id` = '" . $user["user_id"] . "';");
$user_address = mysqli_fetch_assoc($result3);
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

        <div class="container">
            <div class="row">

                <div class="col s7 grey lighten-4">
                    <div class="row">
                        <div class="col s12"></div>
                    </div>
                    <div class="row">
                        <div class="col s4">

                            <!--<h4>Profile</h4>-->
                                <!--<img src="images/login/pt.jpg" style="width: 100%;"/>-->
                                 <!--<i class="icofont-ui-add"></i>-->
                        </div>

                        <div class="col s8">
                            <form action="profile_update.php" method="POST">
                                <div class="row">
                                    <div class="col s6 input-field">
                                        <input type="text" id="first_name" class="validate" value="<?php echo $user["fname"]; ?>" name="fname"/>
                                        <label for="first_name">First Name</label>
                                    </div>
                                    <div class="col s6 input-field">
                                        <input type="text" id="last_name" class="validate" value="<?php echo $user["lname"]; ?>" name="lname"/>
                                        <label for="last_name">Last Name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 input-field">
                                        <input type="email" id="email" class="validate" value="<?php echo $user["email"]; ?>" name="email"/>
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s6 input-field">
                                        <select id="gender" name="gender">
                                            <option value="" disabled>Gender</option>
                                            <option value="male" <?php
                                            if ($user_data["gender"] == "male") {
                                                echo "selected";
                                            }
                                            ?> >Male</option>
                                            <option value="female" <?php
                                            if ($user_data["gender"] == "female") {
                                                echo "selected";
                                            }
                                            ?> >Female</option>
                                        </select>
                                        <label for="gender">Gender</label>
                                    </div>
                                    <div class="col s6 input-field">
                                        <input type="date" id="date" class="validate" value="<?php echo $user_data["dob"]; ?>" name="dob"/>
                                        <label for="date">Date Of Birth</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 input-field">
                                        <input type="text" id="contact" class="validate" value="<?php echo $user_data["phone"]; ?>" name="phone"/>
                                        <label for="contact">Phone E.G=03XXXXXXX</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <button class="btn-small col s5 red white-text hoverable" type="submit">UPDATE</button>
                                </div>
                            </form>

                            <div class="row">
                                <div class="col s6 input-field">
                                    <input type="password" id="current_password" class="validate"/>
                                    <label for="current_password">Current Password</label>
                                </div>
                                <div class="col s6 input-field">
                                    <input type="password" id="new_password" class="validate"/>
                                    <label for="new_password">New Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <button class="btn-small col s5 red white-text hoverable" onclick="change();" >CHANGE PASSWORD</button>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col s1"></div>
                <form action="user_location_update.php" method="POST">
                    <div class="col s4 grey lighten-4">
                        <!--<h4>Manage Address</h4>-->
                        <div class="row">
                            <div class="col s12"></div>
                        </div>
                        <div class="row">
                            <div class="col s12 input-field ">
                                <select onchange="load();" id="location" name="location">
                                    <option value="" disabled selected>Location</option>

                                    <?php
                                    $q = "SELECT * FROM user_location;";
                                    $result = executeQuery($q);

                                    $row_count = mysqli_num_rows($result);

                                    for ($x = 0; $x < $row_count; $x++) {
                                        $row = mysqli_fetch_assoc($result);



                                        echo "<option value=" . $row["location_id"];
                                        if ($row["location_id"] == $user_address["location_id"]) {
                                            echo " selected";
                                        }
                                        echo ">";
                                        echo $row["location"];
                                        echo "</option>";
                                    }
                                    ?>
                                </select>
                                <label>Location</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 input-field ">
                                <select id="sublocation" name="sublocation">
                                    <option value="" disabled selected>SubLocation</option>
                                    <?php
                                    $q = "SELECT * FROM user_sub_location;";
                                    $result0 = executeQuery($q);

                                    $row_count0 = mysqli_num_rows($result0);

                                    for ($x = 0; $x < $row_count0; $x++) {
                                        $row0 = mysqli_fetch_assoc($result0);



                                        echo "<option value=" . $row0["sub_location_id"];
                                        if ($row0["sub_location_id"] == $user_address["sub_location_id"]) {
                                            echo " selected";
                                        }
                                        echo ">";
                                        echo $row0["sub_location"];
                                        echo "</option>";
                                    }
                                    ?>
                                </select>
                                <label>SubLocation</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 input-field ">
                                <input type="text" id="street" class="validate" value="<?php echo $user_address["street"]; ?>" name="street"/>
                                <label for="street">Strret</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 input-field ">
                                <input type="text" id="address" class="validate" value="<?php echo $user_address["address"]; ?>" name="address"/>
                                <label for="address">Address</label>
                            </div>
                        </div>
                        <div class="row">
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            <label>
                                <input type="checkbox" />
                                <span>Use Same Address For Ads</span>
                            </label>
                        </div>

                        <div class="row">
                            <div class="col s12"></div>
                        </div>

                        <div class="row">
                            <button class="btn-small col s5 red white-text hoverable" type="submit">UPDATE</button>
                        </div>

                    </div> 
                </form>
            </div>
        </div>

        <br/>
        <br/>
        <br/>
        <br/>

        <div class="row">
            <div class="col s12">
                <ul id="tabs-swipe-demo" class="tabs">
                    <li class="tab col s4"><a href="#test-swipe-1" class="black-text">My Ads</a></li>
                    <li class="tab col s4"><a class="active black-text" href="#test-swipe-2" >Massages</a></li>
                    <li class="tab col s4"><a href="#test-swipe-3" class="black-text">Watch List</a></li>

                </ul>

                <div id="test-swipe-1" class="col s12 grey lighten-5">
                    <div class="container" style="width: 85%;">
                        <div class="divider gray"></div>
                        <br>
                        <div class="row">
                            <div class="col s3 ">

                            </div>
                            <div class="col s1 "></div>

                            <?php
                            $q3 = "SELECT * FROM `add` WHERE `user_id` = '" . $user["user_id"] . "'";

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

                                echo "<h5 style='line-height: 32px;'>" . $pet_info["nick_name"] . "</h5>";
                                echo "<h6 style='position: absolute; margin-left: 150px; margin-top: 0px;'>" . $pet_info["breed"] . "</h6>";
                                echo "<h6 style='position: absolute; margin-left: 150px; margin-top: 30px;'>" . $pet_info["age"] . "</h6>";
                                echo "<h6>location</h6>";
                                echo "<h6>" . $pet_info["gender"] . "</h6>";
                                echo "<h6 style=''>RS." . $pet_info["price"] . ".00</h6>";
                                echo "<span style='position: absolute; margin-top: 15px; margin-left: -190px;'>" . $row2["date"] . "</span>";
                                echo "<a class='btn red' href='pet-edit.php?add_id=".$add_id."'><i class='material-icons'>edit</i></a>";
                                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                                echo "<a class='btn red right' onclick='del(" . $pet_id . ");' ><i class='material-icons'>delete</i></a>";
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
                        <div id="test-swipe-2" class="col s12 red">Test 2</div>
                        <div id="test-swipe-3" class="col s12 green">Test 3</div>
                    </div>
                </div>



                <script type="text/javascript" src="js/materialize.min.js"></script>
                <script type="text/javascript" src="js/materialize.js"></script>
                <script type="text/javascript" src="js/index.js"></script>
                <script type="text/javascript" src="js/delete_add.js"></script>
                <script type="text/javascript" src="js/edit_add.js"></script>
                <script type="text/javascript" src="js/change_password.js"></script>
                <!--<script type="text/javascript" src="js/sub_location_load.js"></script>-->
                <!--<script type="text/javascript" src="js/jQuery.js"></script>-->
                </body>
                </html>
