<?php
session_start();
include 'user_data/users.php';
    


if (isset($_POST['userName']) && isset($_POST['userPassword'])) {
    if (isset($users[$_POST['userName']]) && $users[$_POST['userName']]['password'] == $_POST['userPassword'] ) {
        $_SESSION['userName'] = $_POST['userName'];
        header('Location: userpage.php');
    }
    header('Refresh: 3; url=index.php');
    echo 'Неверный логин или пароль.';
    

} else {
    header('Location: index.php');
}

