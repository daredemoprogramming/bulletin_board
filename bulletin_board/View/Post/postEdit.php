<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>投稿編集画面</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <h1 class="title">投稿編集画面</h1>
    <form action="postEditDone.php" method="post">
        <p>タイトル</p>
        <input type="text" name="title" size="50" value="">
        <p>本文</p>
        <textarea name="content" rows="4" cols="40"></textarea>
        <input type="hidden" name="post_id" value="<?php echo $_GET['post_id']; ?>">
        <div><input type="submit" name="submit" value="編集"></div>
    </form>
    <hr>
</body>
</html>