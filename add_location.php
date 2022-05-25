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
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css" rel="stylesheet"/>

    </head>
    <body>

        <h3 class="center-align">ADD LOCATION</h3>

        <div class="container">
            <div class="row">
                <div class="col s6 input-field">
                    <input type="text" id="location" class="validate"/>
                    <label for="location">Location</label>
                </div>
                <div class="col s6">
                    <button onclick="m();" class="btn-large col s12  red hoverable disabled">ADD LOCATION</button>
                </div>
            </div>
        </div>

        <br/>
        <br/>
        <br/>

        <h3 class="center-align">ADD SUB LOCATION</h3>

        <div class="container">
            <div class="row">
                <div class="col s6 input-field">
                    <select id="loc" onchange="x();">
                        <option value="" disabled selected>Location</option>
                        <!--<option value="1">Colombo</option>-->
                        <!--<option value="2">Negombo</option>-->
                        <?php
                    
                    include './DB.php';
                    $q = "SELECT * FROM user_location;";
                    $result = executeQuery($q);
                    
                    $row_count = mysqli_num_rows($result);
                    
                    for($x=0; $x<$row_count; $x++){
                        $row = mysqli_fetch_assoc($result);
                        
                        echo "<option value=".$row["location_id"].">".$row["location"]."</option>";
                    }
                    
                    ?>
                        
                    </select>
                    <label>Location</label>
                </div>
                <div class="col s6">
                    
                    
                    
                    
                </div>
            </div>
            
            <div class="row">
                <div class="col s6 input-field">
                    <input type="text" id="sublocation" class="validate"/>
                    <label class="subblocation">Sub Location</label>
                </div>
                
                <div class="col s6">
                    <button onclick="n();" class="btn-large col s12  red hoverable">ADD SUB LOCATION</button>
                </div>
            </div>
            
        </div>
        
        
        <select id="select">
            <option>ok</option>
        </select>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>

        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script type="text/javascript" src="js/add_location.js"></script>
        
    </body>
</html>
