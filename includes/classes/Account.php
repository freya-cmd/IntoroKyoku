<?php
class Account {

    private $errorArray;

    public function __construct() {
        $this->errorArray = array();
    }

    public function register($un, $fn, $em, $em2, $pw, $pw2) {
        $this->validateUsername($un);
        $this->validateFirstname($fn);
        $this->validateLastname($ln);
        $this->validateEmails($em, $em2);
        $this->validatePasswords($pw, $pw2);
    
    }

    private function validateUsername($un) {
        
        if(strlen($un) > 25 || strlen($un) < 5) {
            array_push($this->errorArray, "Your username must be between 5 and 25 characters");
            return;
        }

        //TODO: check if username exists

    }
    
    private function validateFirstname($fn) {
    
    }
    
    private function validateLastname($ln) {
    
    }
    
    private function validateEmails($em, $em2) {
    
    }
    
    private function validatePasswords($pw, $pw2) {
    
    }
}


?>