<?php
session_start();

if (!isset($_SESSION['userName'])) {
    $_SESSION['userName'] = 'Гость';
}
    
header('Location: userpage.php');
    