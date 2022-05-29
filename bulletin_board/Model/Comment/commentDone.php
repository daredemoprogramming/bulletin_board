<?php
    require_once("../../Common/dbConnect.php");
    $content = $_POST["content"];
    $name = $_SESSION["name"];
    $post_id = $_POST["post_id"];

    $sql = "SELECT id FROM registration WHERE name=(:name)";
    $stm = $pdo->prepare($sql);
    $stm->bindValue(':name', $name, PDO::PARAM_STR);
    $stm->execute();
    $data = $stm->fetch();

    if(!empty($data)){
        $user_id = intval($data["id"]);
        $sql = "INSERT INTO comment (user_id, post_id, content, created_at) VALUES (:user_id, :post_id, :content, now())";
        $stm = $pdo->prepare($sql);
        $stm->bindValue(':user_id', $user_id, PDO::PARAM_INT);
        $stm->bindValue(':post_id', $post_id, PDO::PARAM_STR);
        $stm->bindValue(':content', $content, PDO::PARAM_STR);
        $stm->execute();
    }else{
        header("Location: ../../View/Comment/error.php");
    }
    $stm = null;
?>