<?php
    require_once("../../Common/dbConnect.php");
    $sql = "INSERT INTO pre_registration (mail, urltoken, date) VALUES (:mail, :urltoken, now())";
    $stm = $pdo->prepare($sql);
    $stm->bindValue(':urltoken', $urltoken, PDO::PARAM_STR);
    $stm->bindValue(':mail', $mailTo, PDO::PARAM_STR);
    $stm->execute();
    $pdo = null;
?>