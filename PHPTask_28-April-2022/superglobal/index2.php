<?php

session_start();


$_SESSION['first'] = $_POST['first'];


$_SESSION['second'] = $_POST['second'];


$_SESSION['operaton'] = $_POST['operaton'];

if($_SESSION['operaton'] == "+"){
    echo $_SESSION['first']+$_SESSION['second'];
}
else if($_SESSION['operaton'] == "-"){
    echo $_SESSION['first']-$_SESSION['second'];
}
else if($_SESSION['operaton'] == "*"){
    echo $_SESSION['first']*$_SESSION['second'];
}
else if($_SESSION['operaton'] == "/"){
    echo $_SESSION['first']/$_SESSION['second'];
}

?>