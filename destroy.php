<?php
    require_once 'filters/csrf_filter.php';
    require_once 'models/User.php';
    
    $id = $_POST['id'];
    $user = User::find($id);
    
    // そのインスタンスをMySQLから削除
    $flush = $user->delete();
    // $flash_user = User::destroy($id);
    $_SESSION['flush'] = $flush;
    
    header('Location: index.php');
    exit;
    
    // include_once 'views/show_view.php';