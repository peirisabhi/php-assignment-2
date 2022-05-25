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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

    </head>
    <body>
        
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>

        <div class="container">
            <div class="row">
                <div class="col s8 offset-s2">
                    <div class="card-panel">
                        <h4 class="center-align">EMAIL VERIFICATION FAILED</h4>
                        <h6 class="red-text">The verification code does not match our record</h6>
                        <div class="divider"></div>
                        <br/>
                        <h6>Please resend a verification code and try again, or click on the change your email button to change your verification Email</h6>
                        <br/>
                        <a class="btn red" href="resend_verify_email.php">Resend Verification Code </a>
                        <a class="btn red" href="change_email.php">Change Your Email</a>
                        <br/>
                    </div>
                </div>
            </div>
        </div>


        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
        <script type="text/javascript" src="js/index.js"></script>

    </body>
</html>
