<?php
$db_host = '192.99.34.40';
$db_name = 'basinfbr_devsnotes1';
$db_user = 'basinfbr_devsnotes1';
$db_pass = 'Adv51098**';

$pdo = new PDO("mysql:dbname=$db_name;host=$db_host", $db_user, $db_pass);

$array = [
    'error' => '',
    'result' => []
];
