<?php
require_once 'common.php';

if (!isset($_SESSION['userName'])) {
    $_SESSION['userName'] = 'Гость';
}
    
header('Location: userpage.php');
    