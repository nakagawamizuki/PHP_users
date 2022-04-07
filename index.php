<?php
    // コントローラ(Controller)
    // 外部ファイルの読み込み
    require_once 'models/User.php';
    session_start();
    // 物語開始
    // $nakagawa = new User('中川', 18, 'female');
    // $shima = new User('島', 49, 'male');
    // お酒を飲む
    // $nakagawa->drink();
    // $shima->drink();
    // 中川さんが島さんに話しかける
    // $nakagawa->talk($shima);
    // $shima->talk($nakagawa);
    
    // 会員一覧作成
    // $users = array();
    // const users = [];
    
    
    // $users[] = $nakagawa;
    // $users[] = $shima;
    // $users[] = new User('山田', 100, 'female');
    // array_push($users, $nakagawa);
    // usrs.push(nakagawa);
    // var_dump($users);
    // 会員一覧表示
    // foreach($users as $user){
    //     print "-------\n";
    //     print "{$user->name}\n";
    //     print "{$user->age}歳\n";
    //     print "{$user->gender}\n";
    //     print $user->drink();
    // }
    
    // モデルを使ってデータベースからデータを取得
    $users = User::all();
    $flush = $_SESSION['flush'];
    $_SESSION['flush'] = null;
    // var_dump($users);
    // HTMLの表示
    include_once 'views/index_view.php';