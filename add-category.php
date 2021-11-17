<?php
require_once 'connect.php';
$post = file_get_contents("php://input");
$request = json_decode($post, true);

$sql = "INSERT into categories (name, description) values (?,?)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue('1', $request['name']);
$stmt->bindValue('2', $request['description']);
$stmt->execute();

echo json_encode("Data inserted coming from PHP");