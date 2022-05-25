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

    </head>

    <body>

        <br/>
        <br/>
        <br/>

        <div class="container">
            
            <div class="" id="preLoader">
                <div class="indeterminate"></div>
            </div>
            
            <div class="row">
                <img class="col s6" src="images/register/pet1.jpg" style="height: 550px;"/>
                <div class="col s6">
                    <div class="row">
                        <h4 class="red-text center-align">SIGN UP</h4>
                        <div class="input-field col s6">
                            <input id="first_name" type="text" class="validate"/>
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate"/>
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate"/>
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate"/>
                            <label for="password" class="">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="conform_password" type="password" class="validate"/>
                            <label for="conform_password">Conform Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <button onclick="signUp();" class="btn col s12 waves-effect red hoverable">Create Account</button>
                    </div>
                </div>
            </div>
        </div>




        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script type="text/javascript" src="js/sign_up.js"></script>
    </body>
</html>
