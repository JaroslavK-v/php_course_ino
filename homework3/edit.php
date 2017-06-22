<?php

require_once 'common.php';

if (!isset($_SESSION['userName'])) {
    
    header( 'HTTP/1.1 403 Forbidden', true, 403 );
   
}

else { $user = UserProvider::get_user_data($_SESSION['userName']);
?>

<form method="post" action="change_user_data.php">
    <label>Имя</label>
    <input type="text" name="userName" value="<?php echo $user->get_name() ?>"/>
    <label>Фамилия</label>
    <input type="text" name="userSurname" value="<?php echo $user->get_surname() ?>" />
    <label>Возраст</label>
    <input type="number" size="3" name="userAge" min="10" max="100" value="1" />
    <button type="submit">Отправить</button>
</form>

<?php 
     }
