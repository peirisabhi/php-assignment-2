
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
        <form action="check_email_verify.php" method="POST">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <div class="card-panel">
                            <div class="row">
                                <div class="col s12">
                                    <h3 class="center-align">Verify Your Email</h3>
                                    <br/>
                                    <h5>A verification code has been sent your email address: <?php echo $_SESSION["email"]; ?></h5>
                                </div>
                                <br/>
                                <div class="col s12">
                                    <div class="input-field col s6">
                                        <input id="last_name" type="text" class="validate" name="vemail">
                                        <label for="last_name">Verification Code</label>
                                    </div>
                                    <br/>

                                    <div>
                                        <button class="btn green white-text" type="submit">Continue</button>
                                    </div>
                                </div>
                                <a href="index.php" class="hoverable"><h6>Didn't receive a code?</h6></a>
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
