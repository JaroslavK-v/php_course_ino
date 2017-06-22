<?php

// старая версия класса
class User {
    
    private $userName, $userSurname, $userAge, $userRole;
    
    public function __construct($UserName, $UserSurname, $UserAge = null, $UserRole='member') {
        
        $this->userName = $UserName;
        $this->userSurname = $UserSurname;
        $this->userRole = $UserRole;
        $this->userAge = $UserAge;
    
  
    
    public function get_name() {
        
        return $this->userName;
    }
     
    public function get_surname() {
        
        return $this->userSurname;
    }
    
     public function get_age() {
        
        return $this->userAge;
    }
    
    public function get_user_attribute($attribute) {
        
        if (isset($this->$attribute)) {
            return (string)$this->attribute;
        }
        else {return null;}
    }
    
    public function edit_user_attribute($userData) {
       echo 'user data <br>'; var_dump($userData);
        
        foreach($userData as $attribute => $value) {
            if (isset($this->$attribute)) {

                $this->$attribute = (string)$value;
            }
        } echo ' <p>user info: ' . $this->get_name() . " " . $this->get_surname() . '</p>';
        
    }
    
    public function __toString() {
        return (string)$this->userName;
    }
    
}
