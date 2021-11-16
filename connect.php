<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>db connection</title>
</head>
<body>
<?php
    define("HOST","localhost");
    define("DATABASE","connection");
    define("USERNAME","root");
    define("PASSWORD","");

    /* Creating database connection */
    try {
        $pdo = new PDO("mysql:host=" . HOST . ";dbname=" . DATABASE, USERNAME, PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $pdo->exec("SET NAMES 'utf8'");
        return $pdo;
    } catch(PDOException $e) {
        die("ERROR : " . $e->getMessage());
    }
    ?>
</body>
</html>