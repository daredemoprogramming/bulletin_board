<?php
    require_once("../../Common/dbConnect.php");
    $content = $_POST["content"];
    $comment_id = $_POST["comment_id"];

    $sql = "UPDATE comment SET content = :content WHERE id= :id";
    $stm = $pdo->prepare($sql);
    $stm->bindValue(':content', $content, PDO::PARAM_STR);
    $stm->bindValue(':id', $comment_id, PDO::PARAM_INT);
    $stm->execute();

    $stm = null;
?>