<?php
    require_once("../../Controller/Signup/signupMail.php");
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>仮会員登録フォーム</title>
</head>

<body>
    <h1 class="title">仮会員登録フォーム</h1>
    <form action="signupMailSend.php" method="post">
        <p>メールアドレス：<input type="text" name="mail" size="50" value=""></p>
        <input type="hidden" name="urltoken" value="<?=$urltoken?>">
        <input type="submit" name="submit" value="送信">
    </form>
    <hr>
</body>

</html>