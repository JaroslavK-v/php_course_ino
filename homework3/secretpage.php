<?php

require_once 'common.php';

if (!isset($_SESSION['userName'])) {
    header( 'HTTP/1.1 403 Forbidden', true, 403 );
}

else { ?>
    <h2>Эта страница доступна только авторизованным в системе пользователям!</h2>
<div><img src="static/catty.jpg" style=" margin: 10px auto; width: 400px;" /></div>
 <p><a style="display: inline-block; height: 30px; background-color: #ccc; padding: 0 5px; line-height: 30px; color:#000; text-decoration: none" href="logout.php">Выйти</a></p>
<?php                                 
}
