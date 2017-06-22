<?php

class User {
    
    private $userName, $userSurname, $userAge, $userRole="member", $userPassword;
    
    public function __construct($userData) {
//        echo 'собираю объект <br>';
//        var_dump($userData);
        $this->userName = $userData['userName'];
        $this->userSurname = $userData['userSurname'];
        $this->userRole = $userData['userRole'];
        $this->userAge = $userData['userAge'];
        $this->userPassword = $userData['userPassword'];
    
//        echo $this->userName . $this->userSurname;
    }
    
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
        
        if ($this->$attribute !== null) {
            return $this->$attribute;
        }
        else {return null;}
    }
    
    public function set_user_attribute($userData) {
       echo 'user data <br>'; var_dump($userData);
        
        foreach($userData as $attribute => $value) {
            

                $this->$attribute = (string)$value;
            
        } echo ' <p>user info: ' . $this->get_name() . " " . $this->get_surname() . '</p>';
        
    }
    
    public function __toString() {
        return (string)$this->userName;
    }
    
    public function get_user_data() {
        return get_object_vars($this);
    } 
}
