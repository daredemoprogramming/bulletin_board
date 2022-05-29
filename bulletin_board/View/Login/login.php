<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ログイン画面</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <h1 class="title">ログイン画面</h1>
    <form action="loginDone.php" method="post">
        <p>メールアドレス：<input type="text" name="mail" size="50" value=""></p>
        <p>パスワード：<input type="text" name="password" size="50" value=""></p>
        <input type="submit" name="submit" value="ログイン">
    </form>
    <hr>
</body>

</html>