
<!DOCTYPE html>
<?php include './header.php'; ?>

<?php

if(isset($_SESSION["user"])){
    header("location:index.php");
}

?>

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
                <form action="login_check.php" method="POST">
                    <div class="col s6">
                        <h4 class="red-text center-align">SIGN IN</h4>
                        <br/>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="email" id="email" class="validate" name="email"/>
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <!--<br/>-->
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="password" id="password" class="validate" name="password"/>
                                <label for="password">Password</label>
                            </div> 
                        </div>
                        <div class="row">
                            <!--<button onclick="login();" class="btn-large col s12 waves-effect red hoverable">Sign In</button>-->
                            <button class="btn red col s12" type="submit" name="action">Submit
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                        <div class="row">
                            <div class="col s6">
                                <a href="fogot_password.php"><h6>Forgot Password ?</h6></a>
                            </div>
                            <div class="col s6">
                                <a  href="sign_up.php"><h6>New User ?Sign Up here</h6></a>
                            </div>
                        </div>

                    </div>
                </form>
                <img src="images/login/pt1.png" class="col s6" style="height: 500px;"/>
            </div>
        </div>


        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script type="text/javascript" src="js/login.js"></script>
    </body>
</html>
