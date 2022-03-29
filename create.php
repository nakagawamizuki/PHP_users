<?php
    //(c)
    // セッション開始
    session_start();
    // セッションからエラーメッセージを取得
    $errors = $_SESSION['errors'];
    // セッション情報の破棄
    $_SESSION['errors'] = null;
    // name = $_POST['name'];
    include_once 'views/create_view.php';