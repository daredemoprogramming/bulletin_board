<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>コメント編集画面</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <h1 class="title">コメント編集画面</h1>
    <form action="commentEditDone.php" method="post">
        <p>本文</p>
        <textarea name="content" rows="4" cols="40"></textarea>
        <input type="hidden" name="comment_id" value="<?php echo $_GET['comment_id']; ?>">
        <div><input type="submit" name="submit" value="編集"></div>
    </form>
    <hr>
</body>
</html>