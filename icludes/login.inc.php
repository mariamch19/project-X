<?php

if(isset($_POST["submit"]))
{
    
    //Grabbing data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    //instantiate SingupContr class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    $login= new LoginContr ($uid, $pwd, $pwdRepeat, $email);

     // Running error handlers and user signup

      $Signup->LoginUser();

      
    // Going to back to front page 
    header("location: .. /index.php?error=none");
}