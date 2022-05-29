<?php
    require_once("../../Common/dbConnect.php");
    $mail = $_POST["mail"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM registration WHERE mail=(:mail) AND password=(:password)";
    $stm = $pdo->prepare($sql);
    $stm->bindValue(':mail', $mail, PDO::PARAM_STR);
    $stm->bindValue(':password', $password, PDO::PARAM_STR);
    $stm->execute();

    $row_count = $stm->rowCount();
    
    if($row_count === 1){
        $data = $stm->fetch();
        $name = $data["name"];
        $_SESSION["name"] = $name;
    }else{
        header("Location: ../../View/Login/error.php");
    }
    $stm = null;
?>