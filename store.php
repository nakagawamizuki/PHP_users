<?php
    //(c)
    require_once 'models/User.php';
    // セッション開始(すべてのファイルで共通して使える情報の保存箱)
    session_start();
    // $_POSTはページ間をまたいで飛んでくる連想配列
    // スーパーグローバル変数　$_
    // var_dump($_POST);
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    // print "{$name}さんの年齢は{$age}歳、性別は{$gender}";
    // 入力された値をもとに新しいユーザー作成
    $user = new User($name, $age, $gender);
    // $nakagawa = new User('中川', 18, 'female');
    // var_dump($user);
    // 入力値をチュック　（検証）
    $errors = $user->validate();
    // var_dump($errors);
    // 入力エラーが一つもなければ
    if(count($errors) === 0){
       // $user情報をDBに保存する 
       print 'OK';
    }else{
        // 入力画面の戻りたい
        // セッションにエラーメッセージを保存
        $_SESSION['errors'] = $errors;
        // リダイレクト(C)->(C)
        header('Location: create.php');
        exit;
    }
    