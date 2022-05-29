<?php
    require_once("../../Common/dbConnect.php");
    $sql = "SELECT mail FROM pre_registration WHERE urltoken=(:urltoken)";
    $stm = $pdo->prepare($sql);
    $stm->bindValue(':urltoken', $urltoken, PDO::PARAM_STR);
    $stm->execute();

    $row_count = $stm->rowCount();
    
    if($row_count === 1){
        $data = $stm->fetch();
        $mail = $data["mail"];
        $_SESSION['mail'] = $mail;
    }else{
        header("Location: ../../View/Signup/error.php");
    }
    $stm = null;
?>