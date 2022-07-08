<?php 

class SignupContr extends signup  {
    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdrepeat, $email) {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
        $this->email = $email;
    }

    public function SignupUser() {
        if ($this->emptyInput() == false) {
            //echo "Empty input!";
            header("Location: ../index.php?error=emptyInput");
            exit();
        }
        if ($this->invalidUid() == false) {
            //echo "invalid usernames!";
            header("Location: ../index.php?error=usernames");
            exit();
        }
        if ($this->invalidEmail() == false) {
            //echo "invalid Email!";
            header("Location: ../index.php?error=email");
            exit();
        }
        if ($this->pwdMatch() == false) 
        {
            //echo "Passwords don't match!";
            header("Location: ../index.php?error=passwordmatch");
            exit();
        }
    if ($this->uidTakenCheck() == false) 
       {
            //echo "username or email is taken!";
             header("Location: ../index.php?error=useroremailtaken");
             exit();
        }
             $this->setUser($this->uid, $this->email, $this->pwd, $this->pwdrepeat);
    }



    private function emptyInput() {
        '$result';
       if (empty($this->uid) || empty($this->pwd) || empty($this->pwdrepeat) || empty($this->email)) {
           $result = false;
       }
       else {
           $result = true;
       }
       return $result;
   }

    private function invalidUid() {
        '$result';
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail(){
        '$result';
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }


    private function pwdMatch()
    {
        '$result';
        if ($this->pwd !== $this->pwdrepeat)
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    
    private function uidTakenCheck()
    {
        '$result';
        if(!$this->checkUser($this->uid, $this->email))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

}
