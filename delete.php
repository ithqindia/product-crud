<?php
require_once 'connect.php';
$sql = $pdo->prepare("DELETE FROM product WHERE id = $_GET[id]");
$sql->execute();
?> 
