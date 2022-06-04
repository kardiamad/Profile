<?php
    $username = "b8a8b54edf12a4";
    $password = "7e50cd3e";
    $dsn = "mysql:host=us-cdbr-east-05.cleardb.net;dbname=heroku_78006980721e64d";
    $dbcon;

    if(!isset($dbcon)) {
        try{
            $dbcon = new PDO($dsn, $username, $password);
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dbcon->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch(PDOException $e) {
            exit();
        }
    }

    $clicksQuery = "Select * from `downloads`";
    $pdo = $dbcon->prepare($clicksQuery);
    $pdo->execute();
    $clicks = $pdo->fetch();
    $clicksCount = $clicks->github;
    $clicksCount = $clicksCount + 1;

    $query = "Update `downloads` set `github` = :count;";
    $pdo = $dbcon->prepare($query);
    $pdo->bindParam(':count', $clicksCount);
    $count = $pdo->execute();
    return 'success';  
?>