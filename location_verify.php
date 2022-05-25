<?php include './header.php'; ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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

        <div class="container">
            <div class="row">
                <div class="col s3">
                    <div class="section">
                        <h5>Select Your Division</h5>
                    </div>
                    <ul>
                        <?php
                        include './DB.php';
                        $q = "SELECT * FROM user_location;";
                        $result = executeQuery($q);

                        $row_count = mysqli_num_rows($result);

                        for ($x = 0; $x < $row_count; $x++) {
                            $row = mysqli_fetch_assoc($result);

//                                    echo "<li><a href='#'>" . $row["location"] . "</a></li>";
                            echo "<li><h6 class='blue-text' onclick='m(" . $row["location_id"] . ");'>" . $row["location"] . "</h6></li>";
                        }
                        ?>
                    </ul>
                </div>

                <div class="col s3">
                    <div class="section">
                        <h5>Select Your City</h5>
                    </div>
                    <ul id="sublocation" style="position: absolute;">

                    </ul>
                </div>

                
                    <!--<div class="divider"></div>-->
                    <div class="section">
                        <h5>Location Details</h5>

                    </div>
                

                <div class="col s6 input-field offset-s3">
                    <input type="text" id="street" class="validate"/>
                    <label for="street">Street</label>
                </div>
                <div class="col s6 input-field offset-s3 ">
                    <input type="text" id="address" class="validate"/>
                    <label for="street">Address</label>
                </div>

                <div class="col s6 offset-s3">
                    <!--<div class="divider"></div>-->
                    <div class="section">
                        <h5>User Details</h5>
                    </div>
                </div>

                <div class="col s3 input-field offset-s3">
                    <select id="gender">
                        <option value="" disabled selected>Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <label>Gender</label>
                </div>
                <div class="col s3 input-field">
                    <input type="date" id="dob" class="validate"/>
                    <label for="dob">Date Of Birth</label>
                </div>

                <div class="col s6 input-field offset-s3">
                    <input type="text" id="contact" class="validate"/>
                    <label for="contact">Phone E.G=03XXXXXXX</label>
                </div>

                <div class="col s6 offset-s3">
                    <button class="btn red white-text" onclick="insert();">VERIFY
                        <i class="material-icons right">send</i>
                    </button>
                </div>

            </div>
        </div>


    </div>


</div>






<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript" src="js/deatil_verify.js"></script>
</body>
</html>
