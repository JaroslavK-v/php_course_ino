<?php
require_once 'common.php';

if (!isset($_SESSION['userName'])) {
    header( 'HTTP/1.1 403 Forbidden', true, 403 );
}

else {
    // получаем объект с пользователя
    
    $user = UserProvider::get_user_data($_SESSION['userName']);
//    var_dump($users[$_SESSION['userName']]);
//    var_dump($user);
    
    
?>

<!-- и выводим инфу о пользователе методами объекта-->

<p>Вы авторизованы как <strong><?php echo $_SESSION['userName']; ?>: </strong> 
    <?php echo  $user . ' '  . $user->get_surname();  ?></p>

<?php 
    if ($user->get_age()) {echo 'Возраст: ' . $user->get_age(); } ?> 

<p><a href="secretpage.php" style="padding: 5px;">Секретная страница</a>
    <?php
        if ($_SESSION['userName'] != 'Гость'): ?>
        <a href="edit.php" style="padding: 5px;">Изменить личные данные</a></p>
        <?php endif; ?>
    <a style="display: inline-block; height: 30px; margin-top: 10px; background-color: #ccc; padding: 0 5px; line-height: 30px; color:#000; text-decoration: none" href="logout.php">Выйти</a>
<?php
}