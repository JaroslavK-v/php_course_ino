<?php

session_start();
if (!isset($_SESSION['userName'])) {
    
    header( 'HTTP/1.1 403 Forbidden', true, 403 );
   
}

else {
?>

<form method="post" action="change_user_data.php">
    <label>Имя</label>
    <input type="text" name="name" value="<?php echo $_SESSION['name'] ?>"/>
    <label>Фамилия</label>
    <input type="text" name="surname" value="<?php echo $_SESSION['surname'] ?>" />
    <label>Возраст</label>
    <input type="number" size="3" name="age" min="10" max="100" value="1" />
    <button type="submit">Отправить</button>
</form>

<?php }
