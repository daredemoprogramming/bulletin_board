<?php
    $urltoken = $_POST['urltoken'];
    $mailTo = $_POST['mail'];
    $subject = "仮会員登録のお知らせ";
    $url = "http://localhost:8888/bulletin_board/View/Signup/signupForm.php?urltoken=".$urltoken;
    $body = <<< EOM
        この度はご登録いただきありがとうございます。
        下記のURLからご登録下さい。
        {$url}
    EOM;
    mb_language('ja');
    mb_internal_encoding('UTF-8');

    //Fromヘッダーを作成
    $header = 'From: from@example.com';

    if(mb_send_mail($mailTo, $subject, $body, $header)){
        require_once("../../Model/Signup/signupMailSend.php");
    }
?>