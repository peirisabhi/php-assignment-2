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

        <!-- Compiled and minified CSS -->
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">-->

        <!-- Compiled and minified JavaScript -->
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>-->

    </head>
    <body>

        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>

        <form action="change_email_process.php" method="POST">
            <div class="container">
                <div class="row">
                    <div class="col s8 offset-s2">
                        <div class="card-panel">
                            <h4 class="center-align">CHANGE YOUR EMAIL</h4>
                            <div class="divider"></div>
                            <br/>
                            <div class="input-field">
                                <input id="email" type="email" class="validate" name="newMail">
                                <label for="email">New Email</label>
                            </div>
                            <br/>
                            
                            <input class="btn red" type="submit" value="Change Your Email"/>
                            <br/>
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
