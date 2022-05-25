
<?php

session_start();

//isset($_SESSION["user"]);

 
?>


<nav class="nav-extended white box">
            <div class="nav-wrapper">
                <!--<a href="#!" class="brand-logo black-text">Logo</a>-->
                <span class="black-text header-span">Follow Us</span>
                <ul class="black-text links">
                    <li class="link-li"><i class="icofont-facebook"></i></li> 
                    <li class="link-li"><i class="icofont-twitter"></i></li> 
                    <li class="link-li"><i class="icofont-instagram"></i></li> 
                    <li class="link-li"><i class="icofont-pinterest"></i></li> 
                </ul>
                <a href="index.php">
                <span class="black-text heading">pets.lk</span>
                </a>
                <div class="btn-div">
                    <?php
                    if(isset($_SESSION["user"])){
                        echo "<a class='waves-effect waves-light btn-small black-text white mybtn1' href='profile.php'>MY ACOUNT</a>";
                        echo "<a class='waves-effect waves-light btn-small black-text white mybtn2' href='log_out.php'>LOG OUT</a>";
                    }  else {
                        echo "<a class='waves-effect waves-light btn-small black-text white mybtn1' href='sign_up.php'>REGISTER</a>";
                        echo "<a class='waves-effect waves-light btn-small black-text white mybtn2' href='login.php'>LOGIN</a>";
                    }
                    
                    ?>
                    <!--<a class="waves-effect waves-light btn-small black-text white mybtn1" href="sign_up.php">REGISTER</a>-->
                    <!--<a class="waves-effect waves-light btn-small black-text white mybtn2" href="login.php">LOGIN</a>-->
                    <a href="pet_add.php" class="waves-effect waves-light btn-small black-text white mybtn1">ADD PET</a>
                </div>
            </div>
            <!--<div class="nav-content">-->

            <!--<a class="btn-floating btn-large halfway-fab waves-effect waves-light teal">-->
                <!--<i class="material-icons black-text">add</i>-->
            <!--</a>-->
            <!--            </div>-->
        </nav>