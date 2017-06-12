<?php

function change_user_data($userData) {
    $_SESSION['name'] = $userData['name'];
    $_SESSION['surname'] = $userData['surname'];
    $_SESSION['age'] = $userData['age'];
}

session_start();
if (!isset($_SESSION['userName'])) {
    
    header( 'HTTP/1.1 403 Forbidden', true, 403 );
   
}

else {
change_user_data($_POST);
header('Location: userpage.php');
}