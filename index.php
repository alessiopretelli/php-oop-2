<?php

ini_set('display_errors', 1);

require_once "db.php";
require_once "amministratore.php";

$numero_users = rand(50, 100);

$user_1 = new User('Alessio', 'Pretelli', 24, 'M');
$user_1->id = ++$numero_users;
$user_1->setPassword($user_1->nome . $user_1->cognome . $user_1->eta);

$user_2 = new User('Lapo', 'Lupo', 44, 'M');
$user_2->id = ++$numero_users;
$user_2->setPassword($user_2->nome . $user_2->cognome . $user_2->eta);

$user_3 = new Amministratore('Filomena', 'Sarta', 66, 'F', 'Via Roma, 1. Roma' , '33344445555', 'flmnsrt55rewy');
$user_3->id = ++$numero_users;
$user_3->setPassword($user_3->nome . $user_3->cognome . $user_3->eta);

var_dump($user_1);
var_dump($user_2);
var_dump($user_3);