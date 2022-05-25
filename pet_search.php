
<?php include './header.php'; ?>

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

        <form method="post" action="result.php">
            <div class="container center-align">
                <div class="col s12 m7">
                    <h4 class="header">Find My Pet</h4>
                    <div class="card horizontal">
                        <div class="card-stacked">
                            <div class="card-content">
                                <div class="row">
                                    <div class="input-field col s12 m4">
                                        <select class="icons" name="pet">
                                            <option value="" disabled selected>Choose your Pet</option>
                                            <option value="Dog">Cat</option>
                                            <option value="Cat">Dog</option>
                                            <option value="Fish">Fish</option>
                                        </select>
                                        <label>Pet</label>
                                    </div>
                                    <div class="input-field col s12 m4">
                                        <select class="icons" name="pet_for">
                                            <option value="" disabled selected>Pet for</option>
                                            <option value="engage">Engage</option>
                                            <option value="sell">Sell</option>
                                            <option value="buy">Buy</option> 
                                        </select>
                                        <label>Pet for</label>
                                    </div>
                                    <div class="input-field col s12 m4">
                                        <button class="btn">Select Your Location</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>         
        </form>


        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
    </body>
</html>
