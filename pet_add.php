<!DOCTYPE html>
<?php include './header.php'; ?>
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

        <form action="pet_info.php" method="POST" enctype="multipart/form-data">
            <div class="container grey lighten-4">
                <div class="section">
                    <h4 class="red-text">Information About Your Pet</h4>
                </div>

                <div class="row">
                    <div class="col s6 input-field">
                        <select id="pet_for" name="pet_for">
                            <option value="" disabled>Pet For</option>
                            <option value="engage">Engage</option>
                            <option value="sell">Sell</option>
                            <option value="buy">Buy</option>
                        </select>
                        <label for="pet_for">Pet For</label>
                    </div>
                    <div class="col s3 input-field">
                        <input type="number" id="price" class="validate" name="price"/>
                        <label for="price">Price</label>
                    </div>
                    <label>
                        <input type="checkbox" name="negotable" value="1"/>
                        <span>negotiable</span>
                    </label>
                </div>

                <div class="row">
                    <div class="col s6 input-field">
                        <input type="text" id="nick_name" class="validate" name="nick_name"/>
                        <label for="nick_name">Nick Name</label>
                    </div>
                    <div class="col s6 input-field">
                        <select id="pet_type" name="type">
                            <option value="" disabled>Pet Type</option>
                            <option value="cat">Cat</option>
                            <option value="dog">Dog</option>
                            <option value="fish">Fish</option>
                        </select>
                        <label for="pet_type">Pet Type</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s6 input-field">
                        <input type="text" id="breed" class="validate" name="breed"/>
                        <label for="breed">Breed</label>
                    </div>
                    <div class="col s6 input-field">
                        <select id="gender" name="gender">
                            <option value="" disabled>Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="pair">pair</option>
                        </select>
                        <label for="gender">Gender</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s6 input-field">
                        <select id="color" name="color">
                            <option value="" disabled>Colour</option>
                            <option value="black">Black</option>
                            <option value="brown">Brown</option>
                            <option value="gray">Gray</option>
                            <option value="white">White</option>
                        </select>
                        <label for="color">Colour</label>
                    </div>
                    <div class="col s6 input-field">
                        <select id="age" name="age">
                            <option value="" disabled>Age</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="over5">Over 5 Years</option>
                        </select>
                        <label for="age">age</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s6 input-field">
                        <select id="group" name="group">
                            <option value="" disabled>Group</option>
                            <option value="baby">Baby</option>
                            <option value="young">Young</option>                        
                            <option value="adult">Adult</option>
                            <option value="senior">Senior</option>
                        </select>
                        <label for="group">Group</label>
                    </div>
                    <div class="col s6 input-field">
                        <select id="training_level" name="traning">
                            <option value="" disabled>Training Level</option>
                            <option value="basic">Has Basic Training</option>
                            <option value="well">Well Trained</option>
                        </select>
                        <label for="age">Training Level</label>
                    </div>
                </div>
            </div>

            <br/>
            <br/>
            <div class="divider gray"></div>
            <br/>
            <br/>
            <br/>

            <div class="container">
                <h4 class="red-text">Pet Features</h4>
                <br/>
                <h5>Temprament</h5>
                <div class="row">
                    <div class="col s12">
                        <br/>
                        <label>
                            <input type="checkbox" name="protective" value="1"/>
                            <span>Protective</span>
                        </label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>
                            <input type="checkbox" name="playful" value="1"/>
                            <span>Playful</span>
                        </label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>
                            <input type="checkbox" name="affection" value="1"/>
                            <span>Affectionate</span>
                        </label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>
                            <input type="checkbox" name="gentle" value="1"/>
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
                            <input type="checkbox" name="kids" value="1"/>
                            <span>Okay With Kids</span>
                        </label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>
                            <input type="checkbox" name="dogs" value="1"/>
                            <span>Okay With Dogs</span>
                        </label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>
                            <input type="checkbox" name="cats" value="1"/>
                            <span>Okay With Cats</span>
                        </label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>
                            <input type="checkbox" name="apartments" value="1"/>
                            <span>Okay With Apartments</span>
                        </label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>
                            <input type="checkbox" name="seniors" value="1"/>
                            <span>Okay With Seniors</span>
                        </label>
                    </div>
                </div>

                <div class="section">
                    <h5>More About Your Pet</h5>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="textarea2" class="materialize-textarea" data-length="120" name="comment"></textarea>
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
                        <img src="images/icons/petIcon.png" style="width: 180px; height: 200px;" id="imgField"/>
                    </div>
                </div>

                <div class="section">
                    <h5>Pet Owner Details</h5>
                </div>

                <div class="row">
                    <div class="col s5 input-field">
                        <input type="text" id="contact" class="validate" name="contact"/>
                        <label for="contact">Phone E.G=03XXXXXXX</label>
                    </div>

                    <div class="col s6 input-field ">
                        <a class=" btn-large modal-trigger" href="#selectLocation">Select Your Location</a>
                    </div>

                </div>

                <div class="row">
                    <button class="btn-large waves-effect waves-light red" type="submit">Submit
                        <i class="material-icons right">send</i>
                    </button>

                </div>

            </div>

        </form>



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
                                include './DB.php';
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
