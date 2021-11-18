<?php
require_once 'connect.php';
$post = file_get_contents("php://input");
$request = json_decode($post, true);

$sql = "INSERT into carts (product_id,price,quantity,store_id,delivery) values (?,?,?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(1, $request['product_id']);
$stmt->bindValue(2, $request['price']);
$stmt->bindValue(3, $request['quantity']);
$stmt->bindValue(4, $request['store_id']);
$stmt->bindValue(5, $request['delivery']);
$stmt->execute();

echo json_encode("Data inserted coming from PHP");