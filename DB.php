<?php

function getConnection(){
    $con = new mysqli("localhost", "root", "123", "pets", 3306);
    return $con;
}

function executeQuery($q){
    $con = getConnection();
    $result = $con->query($q);
    
    return $result;
}



?>


