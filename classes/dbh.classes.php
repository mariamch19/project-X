<?php

class Dbh {
    protected function connect() {
        try {
            $usernames = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost;dbname=ooplogin', $usernames, $password);
            return $dbh;
    }
    catch (PDOException $e) {
       print "Error!:" . $e->getMessage() . "<br/>";
       die();
         }
    }

} 