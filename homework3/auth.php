<?php
require_once 'common.php';

    
 

if (isset($_POST['userName']) && isset($_POST['userPassword'])) {
    $user = UserProvider::get_user_data($_POST['userName']);
//    echo 'тут создавался объект <br><br>';
//    var_dump($user);
//    var_dump($users[$_POST['userName']]);
//    echo $user->get_user_attribute(userPassword) . '5555555----000';
//    var_dump($_POST['userPassword']);
//    echo $user->get_user_attribute(userPassword) == $_POST['userPassword'];
    if ($user->get_user_attribute(userPassword) == $_POST['userPassword'] ) {
        $_SESSION['userName'] = $_POST['userName'];
        header('Location: userpage.php');
    }
    header('Refresh: 3; url=index.php');
    echo 'Неверный логин или пароль.';
    

} else {
    header('Location: index.php');
}

