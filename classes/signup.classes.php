<?php 

class Signup extends Dbh {

    protected function setUser($uid, $pwd, $email) {
        $stmt = $this->connect()->prepare('INSERT INTO users(users_uid, users_pwd,users_users_email) VALUES ( $uid, $pwd, $email);');

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    
        if(!$stmt->execute(array($uid,$pwd, $email))) {
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed");
            exit();
       }

      $stmt = null;
   }

     protected function checkUser($uid, $email) {
         $stmt = $this->connect()->prepare('SELECT user_uid From users WHERE user_uid = ? OR users_email = ?;');
     
         if(!$stmt->execute(array($uid, $email))) {
             $stmt = null;
             header("Location: ../index.php?error=stmtfailed");
             exit();
        }

        '$resultCheck';
        if ($stmt->rowCount() >0) {
            $resultCheck = false;

        }
        else {
            $resultCheck = true;
        }
        return $resultCheck;
    }
 
}