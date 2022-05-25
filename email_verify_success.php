
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

        <div class="container">
            <div class="row">
                <div class="col s8 offset-s2">
                    <div class="card-panel">
                        <h4 class="center-align">Congrats, your Email was verified!</h4>
                        <div class="divider"></div>
                        <h6>Hi <?php echo $_SESSION["fname"]; ?></h6>
                        <br/>
                        <h6>Thanks for Verifying Your Email on PETS.LK. This helps build trust and keep our community safe</h6>
                        <br/>
                        <h6>Thanks</h6>
                        <h6>The PET.LK Team</h6>
                        <br/>
                        <a class="btn green lighten-1" href="login.php">Please Login Here</a>
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

<?php
$_SESSION["fname"] = "";
$_SESSION["lname"] = "";
$_SESSION["email"] = "";
$_SESSION["password"] = "";
$_SESSION["code"] = "";
?>