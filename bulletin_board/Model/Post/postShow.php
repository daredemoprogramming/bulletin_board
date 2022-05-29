<?php
    require_once("../../Common/dbConnect.php");
    $post_id = $_GET["post_id"];
    $sql = "SELECT 
                post.*
            FROM
                post
            WHERE
                post.id = :id";
    $stm = $pdo->prepare($sql);
    $stm->bindValue(':id', $post_id, PDO::PARAM_INT);
    $stm->execute();
    $post = $stm->fetch();

    $sql = "SELECT 
                comment.*,
                registration.name
            FROM
                comment
            INNER JOIN
                registration
            ON
                comment.user_id = registration.id
            WHERE
                comment.post_id = :id";
    $stm = $pdo->prepare($sql);
    $stm->bindValue(':id', $post_id, PDO::PARAM_INT);
    $stm->execute();
    $comments = $stm->fetchAll();
?>