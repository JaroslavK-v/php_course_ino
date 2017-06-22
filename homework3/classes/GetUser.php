<?php


class GetUser {
    
    // статический метод, отдающий класс пользователя, если он авторизован в системе
    
    public static function get_user($userData) {
        // отдаём пустое значение, если пользователь не авторизован
        
        
        if (!isset($_SESSION['userName'])) {
            return null;
        }
        
        // формируем новый объект класса User
        else {
      
            
           
            $user = new User($userData);
                        
        }
        return $user;
    }
        
}
