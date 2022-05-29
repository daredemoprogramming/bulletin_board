<?php
    require_once("../../Common/dbConnect.php");
    $title = $_POST["title"];
    $content = $_POST["content"];
    $post_id = $_POST["post_id"];

    $sql = "UPDATE post SET title = :title, content = :content WHERE id= :id";
    $stm = $pdo->prepare($sql);
    $stm->bindValue(':title', $title, PDO::PARAM_STR);
    $stm->bindValue(':content', $content, PDO::PARAM_STR);
    $stm->bindValue(':id', $post_id, PDO::PARAM_INT);
    $stm->execute();

    $stm = null;
?>