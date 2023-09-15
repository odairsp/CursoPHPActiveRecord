<?php
require '../vendor/autoload.php';

use app\database\activeRecord\Update;
use app\database\models\User;


$user = new User;

$user->firstName = "Odair";
$user->lastName = "Farias";
$user->id = 1;

$user->update(new Update);

// var_dump($user);

echo $user->getTable();
