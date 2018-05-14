<?php

require 'vendor/autoload.php';

// $client = new MongoDB\Client;
// $testdb = $client->testdb;
// $users_table = $testdb->createCollection('users');
// $users_table = $testdb->users;

// $result = $users_table->deleteOne(['_id' => '1']);
// $result = $users_table->deleteMany(['age' => 22]);
//
// printf('se borró %d registros\n',$result->getDeletedCount());


// $users = $users_table->find(
//     // ['age' => 20],
//     // ['projection' => ['_id' => 0,'name' => 1, 'age' => 1]]
// );
//
// foreach ($users as $key => $user) {
//     var_dump($user);
// }


// $updateResult = $users_table->updateOne(
//     ['age' => '23'],
//     ['$set' => ['age' => 22]]
// );
//
// printf('matcheds %d registros\n',$updateResult->getMatchedCount());
// printf('modified %d registros',$updateResult->getModifiedCount());

// $updateResult = $users_table->updateMany(
//     ['age' => 22],
//     ['$set' => ['skill' => 'run']]
// );
//
// printf("matcheds %d registros\n",$updateResult->getMatchedCount());
// printf("modified %d registros",$updateResult->getModifiedCount());

// $replaceResult = $users_table->replaceOne(
//     ['_id' => '1'],
//     ['_id' => '1', 'favColor' => 'blue']
// );
//
// printf("matcheds %d registros\n",$replaceResult->getMatchedCount());
// printf("modified %d registros",$replaceResult->getModifiedCount());


// $result = $users_table->insertMany([
//     ['_id' => '1','name' => 'neil','last_name' => 'esteves','age' => 25,],
//     ['_id' => '2','name' => 'liz','last_name' => 'sotelo','age' => 22,],
//     ['_id' => '3','name' => 'karen','last_name' => 'beizaga','age' => 26,],
//     ['_id' => '4','name' => 'miriam','last_name' => 'contreras','age' => 20,],
//     ['_id' => '5','name' => 'kelly','last_name' => 'idrogo','age' => 22,],
//     ['_id' => '6','name' => 'jasmin','last_name' => 'paloma','age' => 20,],
//     ['_id' => '7','name' => 'jennifer','last_name' => 'lombardy','age' => '22',],
// ]);

// printf('Insertó %d regitros' ,$result->getInsertedCount() );
// var_dump($result->getInsertedIds());

// $result = $collection->insertOne([
//     '_id' => '1',
//     'name' => 'neil',
//     'last_name' => 'esteves',
//     'age' => 26,
//     'email' => 'neil.esteves20@gmail.com',
// ]);
//

// function createDatabaseMongo($dbName = null,$tableName = null)
// {
//     $client = new MongoDB\Client;
//
//     if($tableName && $dbName){
//         $client->$dbName->createCollection($tableName);
//         echo "MongoDB created";
//     }else {
//         echo "Ingresar nombre de base de datos/tabla";
//     }
//
// }
