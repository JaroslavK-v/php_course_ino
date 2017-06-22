<?php

require_once 'common.php';


if (!$_SESSION['userName']) {
    
    header( 'HTTP/1.1 403 Forbidden', true, 403 );
   
}

else {
     // получаем объект с пользователя
    
    $user = UserProvider::get_user_data($_SESSION['userName']);
    var_dump($user);
    var_dump($_POST);
    
    $user->set_user_attribute($_POST); //передаём методу класса массив с новыми значениями полей
    UserProvider::update_user_info($_SESSION['userName'], $user->get_user_data());
    var_dump($user);
    
header('Location: userpage.php');
}