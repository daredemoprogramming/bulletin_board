<?php
    require_once("../../Common/dbConnect.php");
    $title = $_POST["title"];
    $content = $_POST["content"];
    $name = $_SESSION["name"];

    $sql = "SELECT id FROM registration WHERE name=(:name)";
    $stm = $pdo->prepare($sql);
    $stm->bindValue(':name', $name, PDO::PARAM_STR);
    $stm->execute();
    $data = $stm->fetch();

    if(!empty($data)){
        $user_id = intval($data["id"]);
        $sql = "INSERT INTO post (user_id, title, content, created_at) VALUES (:user_id, :title, :content, now())";
        $stm = $pdo->prepare($sql);
        $stm->bindValue(':user_id', $user_id, PDO::PARAM_INT);
        $stm->bindValue(':title', $title, PDO::PARAM_STR);
        $stm->bindValue(':content', $content, PDO::PARAM_STR);
        $stm->execute();
    }else{
        header("Location: ../../View/Post/error.php");
    }
    $stm = null;
?>