<?php

function logout(){
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/

session_start();
if(isset($_POST['submit'])){
    $_SESSION['email'] == true;
    unset($_SESSION['email']);
    unset($_SESSION['username']);
    session_destroy();
    header('Location:login.html');
}



}


?>