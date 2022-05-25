
<?php
    session_start();
    $email = $_GET["email"];
    $_SESSION["em"]=$email;
    
    echo $email;

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
        <br/>
        <br/>
        <br/>

        <div class="container">
            <div class="row">
                <div class="col s8 offset-s2">
                    <div class="card-panel">
                        <div class="row">
                            <div class="col s12">
                                <h4 class="center-align">Create New Password</h4>
                                <br/>
                                <div class="input-field">
                                    <input type="password" class="validate" id="new"/>
                                    <label class="new">New Password</label>
                                </div>
                                <br/>
                                <div class="input-field">
                                    <input type="password" class="validate" id="con_new"/>
                                    <label class="new">Conform Password</label>
                                </div>
                                <br/>
                                <br/>
                                <center>
                                    <button class="btn-large green lighten-1 white-text" onclick="reset();">Done</button>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script type="text/javascript" src="js/new_password_process.js"></script>
    </body>
</html>
