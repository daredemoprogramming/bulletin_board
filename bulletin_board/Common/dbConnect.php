<?php

    try {
    // データベースに接続
    $pdo = new PDO(
        'mysql:dbname=bulletion_board;host=localhost;charset=utf8mb4',//dbname=で参照先のDB名を切り替えられます。
        'root',//初期設定ではユーザー名は「root」です。
        'root',//初期設定ではパスワードは「root」もしくは「''(空文字)」です。「'root'」でうまくいかない場合は「''」で試してみて下さい。
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );

    } catch (PDOException $e) {
    //エラー発生時の処理
    echo $e->getMessage();
    exit;
    }
?>