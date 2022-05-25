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


        <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>-->
        <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>-->
<!--        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-materialize/0.2.2/angular-materialize.min.js"></script>-->
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>-->



    </head>
    <body>

        <!--<div class="header"></div>-->



        <div class="slider img-z">
            <ul class="slides">
                <li>
                    <img src="images/slider/pet1.jpg"> <!-- random image -->
                    <div class="caption center-align">
                        <!--<h3>This is our big Tagline!</h3>-->
                        <!--<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>-->
                    </div>
                </li>
                <li>
                    <img src="images/slider/pet2.jpg"> <!-- random image -->
                    <div class="caption left-align">
                        <!--<h3>Left Aligned Caption</h3>-->
                        <!--<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>-->
                    </div>
                </li>
                <li>
                    <img src="images/slider/pet3.jpg"> <!-- random image -->
                    <div class="caption right-align">
                        <!--<h3>Right Aligned Caption</h3>-->
                        <!--<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>-->
                    </div>
                </li>
                <li>
                    <img src="images/slider/pet4.jpg"> <!-- random image -->
                    <div class="caption center-align">
                        <!--<h3>This is our big Tagline!</h3>-->
                        <!--<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>-->
                    </div>
                </li>
            </ul>
        </div>

        <br/>
        <br/>

        <div class="divider"></div>

        <br/>
        <br/>
        <br/>


        <div class="divider"></div>

        <br/>
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
                                            include './DB.php';
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
        <br/>

        <div class="divider"></div>

        <br/>
        <br/>



        <br/>
        <br/>
        <br/>

        <div class="divider"></div>

        <br/>
        <br/>
        <br/>

        <h4 class="center-align">Buy Pet Food & Accessories</h4>
        <br/>

        <div class="container">
            <div class="row">
                <div class="col s5 card-panel teal hoverable">
                    <h4>PET FOOD</h4>
                </div>
                <div class="col s1"></div>
                <div class="col  s5 card-panel teal hoverable">
                    <h4>PET FOOD</h4>
                </div>
            </div>
        </div>


        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

        <!-- Modal Structure -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <h4>Modal Header</h4>
                <p>A bunch of text</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
            </div>
        </div>




        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
    </body>
</body>
</html>
