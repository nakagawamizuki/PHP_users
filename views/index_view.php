<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>会員一覧</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <!--ビュー(view)-->
        <h1>会員一覧</h1>
        <?php if($flush !== null): ?>
        <h2 class="success"><?= $flush ?></h2>
        <?php endif; ?>
        <p>会員人数: <?= count($users) ?>人</p>
        <?php foreach($users as $user): ?>
        <ul>
            <li><?= $user->name ?></li>
            <li><?= $user->age ?>歳</li>
            <li><?= $user->gender === 'male' ? '男性' : '女性'?></li>
            <li><?= $user->drink() ?></li>
        </ul>
        <?php endforeach; ?>
        <p><a href="create.php">新規会員登録</a></p>
    </body>
</html>