
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

        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="card-panel">
                        <div class="row">
                            <div class="col s6">
                                <div class="slider">
                                    <ul class="slides">
                                        <li>
                                            <img src="images/subSliders/1.jpg" style="height: 900px !important;">
                                        </li>
                                        <li>
                                            <img src="images/subSliders/2.jpg" style="height: 900px !important;">
                                        </li>
                                        <li>
                                            <img src="images/subSliders/3.jpg" style="height: 900px !important;"> 
                                        </li>
                                        <li>
                                            <img src="images/subSliders/4.jpg" style="height: 900px !important;"> 
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col s6">
                                <form action="reset_password.php" method="POST">
                                    <br/>
                                    <center>
                                        <img src="images/gif/changePassword.gif" style="height: 20%; width: 30%;"/>
                                    </center>
                                    <br/>
                                    <br/>
                                    <h4 class="center-align">Forgot Password?</h4>
                                    <br>
                                    <h6 class="center-align">We will send you instructions to reset your password</h6>
                                    <br/>
                                    <div class="input-field col s12">
                                        <input id="email" type="email" class="validate" name="email">
                                        <label for="email">Enter Your Email</label>
                                    </div>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <div class="row">
                                        <a href="login.php" class="btn col s3 offset-s2">Back</a>
                                        <button type="submit" class="btn col s3 offset-s3">Next</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
        <script type="text/javascript" src="js/index.js"></script>

        <script>
            $(document).ready(function() {

                $('.slider').slider({
                    full_width: true,
                    height: 600, // default - height : 400
                    interval: 6000 // default - interval: 6000
                });

            });
        </script>

    </body>
</html>
