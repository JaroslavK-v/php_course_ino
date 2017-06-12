<?php
session_start();
if (isset($_SESSION['userName'])) {
    header('Location: userpage.php');
}
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Homework No2</title>
</head>
<body>
    


    <h2>Авторизуйтесь пожалуйста.</h2>
    <form method="post" action="auth.php" >
    <label>Логин</label>
        <input type="text" name="userName" />
    <label>Пароль</label>
        <input type="text" name="userPassword" />
        <button type="submit">Войти</button>
    </form>
    <br>Или продолжить как <a href="guest.php">гость</a>?
</body>
</html>