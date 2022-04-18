<?php
    require_once 'filters/csrf_filter';
    require_once 'models/User.php';
    
    $id = $_POST['id'];
    $user = User::find($id);
    
    $flash_user = User::destroy($id);
    $_SESSION['flash_user'] = $flash_user;
    
    header('Location: index.php');
    exit;
    
    include_once 'views/show_view.php';