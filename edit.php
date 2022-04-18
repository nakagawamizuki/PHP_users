<?php
    // Controller
    
    //外部ファイルの読み込み
    require_once 'models/User.php';
    
    // セッション開始
    session_start();
    
    $id = $_GET['id'];
    
    $user = User::find($id);
    
    // if($user === false){
    //     $errors = array();
    //     $errors[] = 'そのようなユーザーはいません';
        
    //     $_SESSION['errors'] = $errors;
    //     header('Location: index.php');
    //     exit;
    // }else{
        $errors = $_SESSION['errors'];
        $_SESSION['errors'] = null;
        
        $token = session_id();
        
        include_once 'views/edit_view.php';
    // }
    
    