<?php
#front conroller

use App\Models\Product;

include "bootsrap/init.php";

// $user_data = [
//     "id" => rand(5,1000),
//     "name" => "zahra"
// ];
// $userModel = new User();
// // $userModel->create($user_data);
// $user = $userModel->getAll();
// echo "<pre>";
// var_dump($user);
// echo "</pre>";

//  $productModel = new Product();
// for($i = 1; $i <= 20 ; $i++){
//     $productModel->create([
//    'id' => $i,
//    'title' => "Product-$i"
//     ]);  
// }
echo "<pre>";
// var_dump($productModel->getAll());

echo "</pre>";
// $router = new \App\Core\Routing\Router();
// $router->run();
try {

    $connection = new \PDO("mysql:dbname={$_ENV['DB_NAME']};host={$_ENV['DB_HOST']}", $_ENV['DB_USER'], $_ENV['DB_PASS']);
    $connection->exec("set names utf8;");
    echo "ok";
} catch (PDOException $e) {
    echo "Connection Faild: " . $e->getMessage();
}
