<?php



if(isset($_POST["submit"]))
{
    
    //Grabbing data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];
    
    $usernames = "root";
    $password = "";
    $dbh = new PDO('mysql:host=localhost;dbname=ooplogin', $usernames, $password);
    $sql = "INSERT INTO users(users_uid,users_id, users_pwd, users_email) VALUES (?,?,?,?);";
    $dbh->prepare($sql)->execute([$uid, $pwd, $pwdrepeat, $email]);
    
    //instantiate SingupContr class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup= new SignupContr ($uid, $pwd, $pwdrepeat, $email);

     // Running error handlers and user signup

      $signup->SignupUser();

      
    // Going to back to front page 
    header("location: .. /index.php?error=none");
}
