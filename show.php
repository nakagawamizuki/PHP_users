<?php
    include_once 'models/User.php';
    session_start();
    
    $id = $_GET['id'];
    $user = User::find($id);
    
    $token = session_id();
    
    include_once 'views/show_view.php';