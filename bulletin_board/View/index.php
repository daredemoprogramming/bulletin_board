<?php
    require_once("../Controller/index.php");
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>トップページ</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <?php
    session_start();
    if(!empty($_SESSION["name"])){
    ?>
    <a href="../View/Logout/logout.php">ログアウト</a>
    <?php
    }else{
    ?>
    <a href="../View/Signup/signupMail.php">新規会員登録</a>
    <a href="../View/Login/login.php">ログイン</a>
    <?php
    }
    ?>

    <hr>

    <h1 class="title">掲示板トップページ</h1>

    <hr>

    <h2>投稿一覧</h2>
    <?php foreach($posts as $post): ?>
        <a class="post-link" href="../View/Post/postShow.php?post_id=<?php echo $post['id']; ?>">
            <div class="card">
                <div class="card-top-box">
                    <span class="title-text"><?php echo $post['title']; ?></span>
                    <span class="content-text"><?php echo $post['content']; ?></span>
                </div>
                <div class="card-bottom-box">
                    <span class="user-name-text"><?php echo $post['name']; ?>さん</span>
                    <span class="date-text"><?php echo $post['created_at']; ?></span>
                </div>
                <?php if(!empty($_SESSION["name"]) && $_SESSION["name"] === $post['name']): ?>
                <a href="../View/Post/postEdit.php?post_id=<?php echo $post['id']; ?>">編集</a>
                <a href="../View/Post/postDelete.php?post_id=<?php echo $post['id']; ?>">削除</a>
                <?php endif; ?>
            </div>
        </a>
    <?php endforeach; ?>

</body>

</html>