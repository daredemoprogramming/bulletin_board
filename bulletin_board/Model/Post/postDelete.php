<?php
    require_once("../../Common/dbConnect.php");
    $post_id = $_GET["post_id"];

    $sql = "DELETE FROM post WHERE id= :id";
    $stm = $pdo->prepare($sql);
    $stm->bindValue(':id', $post_id, PDO::PARAM_INT);
    $stm->execute();

    $stm = null;
?>