<?php
    require_once("../../Controller/Signup/signupForm.php");
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>仮会員登録フォーム</title>
</head>

<body>
    <h1 class="title">会員登録フォーム</h1>
    <form action="signupDone.php" method="post">
        <p>メールアドレス：<input type="text" name="mail" size="50" value=""></p>
        <p>パスワード：<input type="text" name="password" size="50" value=""></p>
        <p>名前：<input type="text" name="name" size="50" value=""></p>
        <input type="submit" name="submit" value="送信">
    </form>
    <hr>
</body>

</html>