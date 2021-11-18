<?php

require_once 'connect.php';
$post = file_get_contents("php://input");
$request = json_decode($post, true);

$sql = "UPDATE category SET name=?, description=? WHERE id =?";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(1, $request['name']);
$stmt->bindValue(2, $request['description']);
$stmt->bindValue(3, $request['id']);
$stmt->execute();

echo json_encode('Reply from php data updated');
