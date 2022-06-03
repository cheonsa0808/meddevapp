<?php

require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;

$factory = (new Factory)
    ->withServiceAccount('kookie-c969c-firebase-adminsdk-1y39w-3aff1b0b16.json')
    ->withDatabaseUri('https://kookie-c969c-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();
$database = $factory->createDatabase();
$auth = $factory->createAuth();

?>