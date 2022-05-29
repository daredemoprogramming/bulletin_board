<?php
    require_once("../../Common/dbConnect.php");
    $mail = $_POST["mail"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $sql = "SELECT mail FROM registration WHERE mail=(:mail)";
    $stm = $pdo->prepare($sql);
    $stm->bindValue(':mail', $mail, PDO::PARAM_STR);
    $stm->execute();

    $row_count = $stm->rowCount();

    if($row_count >= 1){
        header("Location: ../../View/Signup/error.php");
    }else{
        $sql = "INSERT INTO registration (mail, password, name, created_at) VALUES (:mail, :password, :name, now())";
        $stm = $pdo->prepare($sql);
        $stm->bindValue(':mail', $mail, PDO::PARAM_STR);
        $stm->bindValue(':password', $password, PDO::PARAM_STR);
        $stm->bindValue(':name', $name, PDO::PARAM_STR);
        $stm->execute();
    }
    $stm = null;
?>