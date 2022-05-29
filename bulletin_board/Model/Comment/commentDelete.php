<?php
    require_once("../../Common/dbConnect.php");
    $comment_id = $_GET["comment_id"];

    $sql = "DELETE FROM comment WHERE id= :id";
    $stm = $pdo->prepare($sql);
    $stm->bindValue(':id', $comment_id, PDO::PARAM_INT);
    $stm->execute();

    $stm = null;
?>