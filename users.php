<?php

require 'vendor/autoload.php';

$client = new MongoDB\Client;
$testdb = $client->testdb;
// $users_table = $testdb->createCollection('users');
$users_table = $testdb->users;

// $user = $users_table->findOne(['age' => '22']);
// var_dump($user);

$users = $users_table->find(
    [],
    // ['projection' => ['_id' => 0,'name' => 1, 'age' => 1]]
    [
        // 'limit' => 4,
        // 'skip' => 2,
        // 'sort' => ['age' => 1]
    ]
);

foreach ($users as $key => $user) {
    var_dump($user);
}
