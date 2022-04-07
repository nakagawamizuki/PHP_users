<?php
    // (F)
    // セッション開始(すべてのファイルで共通して使える情報の保存箱)
        session_start();
        // $_POSTはページ間をまたいで飛んでくる連想配列
        // スーパーグローバル変数　$_
        // var_dump($_POST);
        $token = $_POST['_token'];
        if($token !== session_id()){
            header('Location: create.php');
            exit;
        }