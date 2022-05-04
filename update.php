<?php
    // C
    require_once 'filters/csrf_filter.php';
    require_once 'models/User.php';
    
    $id = $_POST['id'];
    $user = User::find($id);
    
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    
    $user->name = $name;
    $user->age = $age;
    $user->gender = $gender;
    
    // 入力された値の検証
    $errors = $user->validate();
    // 入力エラーが一つもなければ
    if(count($errors) === 0){
        // 目標
        // セッションからユーザー一覧を取得
        // $users = $_SESSION['users'];
        // $users[] = $user;
        // $_SESSION['users'] = $users;
        // $_SESSION['flush'] = $user->name . 'さんが登録されました';
        // データベースに新しいユーザーを登録
        $flush = $user->save();
        $_SESSION['flush'] = $flush;
        // ユーザー一覧へリダイレクト
        header('Location: index.php');
        exit;
    }else{
        // 入力のし直し
        $_SESSION['errors'] = $errors;
        // $_SESSION['user'] = $user;
        header('Location: edit.php?id=' . $user->id);
        exit;
    }