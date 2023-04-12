<?php
class Account {

    private $con;
    private $errorArray = array(); // error array assigned to empty array

    public function __construct($con) {
        $this->con = $con;
    }

    public function validateFirstName($fn) {
        if(strlen($fn) < 2 || strlen($fn) > 25) {
            array_push($this->errorArray, Constants::$firstNameCharacters);
        }
        // if length of first name is <2 or >2 it will assign error to error array
    }

    public function getError($error) {
        if(in_array($error, $this->errorArray)) {
            return $error;
        }
    }

}
?>