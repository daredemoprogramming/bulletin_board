<?php
    require_once("../Common/dbConnect.php");
    $sql = "SELECT 
                post.*,
                registration.name
            FROM
                post
            INNER JOIN
                registration
            ON
                post.user_id = registration.id";
    $stm = $pdo->prepare($sql);
    $stm->execute();
    $posts = $stm->fetchAll();
?>