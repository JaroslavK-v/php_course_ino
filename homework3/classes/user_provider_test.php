<?php
require '../common.php';
    
$userData = UserProvider::get_from_json('alex');
var_dump($userData);
echo '<hr>';

$user = UserProvider::get_user_data('pete');
UserProvider::update_user_info('trevor', ['userName'=>'Trevor', 'UserRole'=>'member', 'userSurname'=>'Gizzly']);

var_dump($user);