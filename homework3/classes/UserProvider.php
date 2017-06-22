<?php

// класс с методом для получения пользователя из файла по его логину

class UserProvider {
    //хардкодить пути конечно плохо, но по уму не получилось
    
    
    public static function get_user_data($userName) {
        // статический метод, отдающий объект пользователя, если он авторизован в системе
    
        $userData = self::get_from_json($userName);  
    
        if ($userData !== null) {
//            echo 'прочитал файл <br><br>';
//            var_dump($userData);
            return new User($userData);
        } else {
//            echo 'не прочитал файл <br><br>';
//            var_dump($userName);
//            var_dump($users[$userName]);
            //если не получается выхватить по json, читаем массив
            include 'user_data/users.php';
            
            return new User($users[$userName]);
        }

    }
    
    public static function get_from_json($userName) {
        //ищет файл с именем пользователя и преобразует данные в массив
        
        $userName = strtolower($userName);
//            echo  'ищу файл ' . $userName .' <br><br>';
            if (file_exists('user_data/' . $userName)) {
//                echo 'файл найден <br><br>';
                $file = file_get_contents('user_data/' . $userName);
            } else {
//                echo 'файл не найден <br><br>'; 
                    return null; }
        
        
            $userData = json_decode($file, true);
            return $userData;
        
    }
    
    public static function update_user_info($userName, $userInfo) {
        
        $userInfo = json_encode($userInfo);
        file_put_contents('user_data/' . $userName, $userInfo);
        
    }
        
}
