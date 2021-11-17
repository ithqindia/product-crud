<?php

require_once 'connect.php';

$sql = "SELECT * FROM categories WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->bindValue('1', $_GET['id']);
$stmt->execute();
$data = $stmt->fetch();

echo json_encode($data);
