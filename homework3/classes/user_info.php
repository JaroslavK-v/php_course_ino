<?php
    // файл для теста работоспособности класса

    require 'D:\open_srv\OpenServer\domains\phpcourse.local\homework3\classes\user.php';

        //$Alex = new User('Александр','Скаазгард');
        $userData = [
            'userName' => 'Александр',
            'userSurname' => 'Скаазгард',
            'userPassword' => "1212",
            
        ];
        var_dump($userData);
        $Alex = new User($userData);

    echo $Alex->get_name() . PHP_EOL;
    echo $Alex->get_surname();
echo '<br>';
    echo $Alex->get_user_attribute(userPassword);
echo '<br>';    
    $Alex->set_user_attribute(['userSurname'=>'Бэлл']);
echo $Alex->get_surname();

echo '<hr>';
 var_dump($Alex);
echo $Alex;