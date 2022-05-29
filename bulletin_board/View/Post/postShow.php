<?php
    require_once("../../Controller/Post/postShow.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>投稿詳細画面</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <h1 class="title">投稿詳細画面</h1>

    <hr>

    <h2><?php echo $post["title"] ?></h2>
    <p><?php echo $post["content"] ?></p>

    <hr>

    <?php foreach($comments as $comment): ?>
        <div class="card">
            <div class="card-top-box">
                <span class="content-text"><?php echo $comment['content']; ?></span>
            </div>
            <div class="card-bottom-box">
                <span class="user-name-text"><?php echo $comment['name']; ?>さん</span>
                <span class="date-text"><?php echo $comment['created_at']; ?></span>
            </div>
            <?php if(!empty($_SESSION["name"]) && $_SESSION["name"] === $comment['name']): ?>
                <a href="../../View/Comment/commentEdit.php?comment_id=<?php echo $comment['id']; ?>">編集</a>
                <a href="../../View/Comment/commentDelete.php?comment_id=<?php echo $comment['id']; ?>">削除</a>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>

    <h2>コメントする</h2>
    <form action="../Comment/commentDone.php" method="post">
        <textarea name="content" rows="4" cols="40"></textarea>
        <input type="hidden" name="post_id" value="<?php echo $_GET['post_id']; ?>">
        <div><input type="submit" name="submit" value="コメント"></div>
    </form>
</body>

</html>