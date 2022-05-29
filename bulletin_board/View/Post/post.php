<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>投稿画面</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <h1 class="title">投稿画面</h1>
    <form action="postDone.php" method="post">
        <p>タイトル</p>
        <input type="text" name="title" size="50" value="">
        <p>本文</p>
        <textarea name="content" rows="4" cols="40"></textarea>
        <div><input type="submit" name="submit" value="投稿"></div>
    </form>
    <hr>
</body>

</html>