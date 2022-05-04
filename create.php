<?php
    //(c)
    require_once 'models/User.php';
    // セッション開始
    session_start();
    // セッションからエラーメッセージを取得
    $errors = $_SESSION['errors'];
    // セッション情報の破棄
    $_SESSION['errors'] = null;
    $user = $_SESSION['user'];
    $_SESSION['user'] = null;
    if($user === null){
        $user = new User('', '', 'male');
    }
    $token = session_id();
    // name = $_POST['name'];
    include_once 'views/create_view.php';