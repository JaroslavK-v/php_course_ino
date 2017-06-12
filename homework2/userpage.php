<?php
session_start();
if (!isset($_SESSION['userName'])) {
    header( 'HTTP/1.1 403 Forbidden', true, 403 );
}

else {
include 'user_data/users.php';
if (!isset($_SESSION['name'])) {
    $_SESSION['name'] = $users[$_SESSION['userName']]['name'];
    $_SESSION['surname'] = $users[$_SESSION['userName']]['surname'];
}
?>


<p>Вы авторизованы как <strong><?php echo $_SESSION['userName'] ?>: </strong> 
    <?php echo  $_SESSION['name'] . ' '  . $_SESSION['surname']  ?></p>
<?php 
    if (isset($_SESSION['age'])) {echo 'Возраст: ' . $_SESSION['age']; } ?>
<p><a href="secretpage.php" style="padding: 5px;">Секретная страница</a>
    <a href="edit.php" style="padding: 5px;">Изменить личные данные</a></p>
    <a style="display: inline-block; height: 30px; margin-top: 10px; background-color: #ccc; padding: 0 5px; line-height: 30px; color:#000; text-decoration: none" href="logout.php">Выйти</a>
<?php
}