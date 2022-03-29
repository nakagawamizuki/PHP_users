<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>新規会員一覧</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <!--ビュー(view)-->
        <h1>新規会員一覧</h1>
        <div>
            <?php if($errors !== null): ?>
            <ul>
                <?php foreach($errors as $error): ?>
                <li class="error"><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
            <form action="store.php" method="POST">
                名前: <input type="text" name="name"><br>
                年齢: <input type="text" name="age"><br>
                性別: <input type="radio" name="gender" value="male" checked>男性 <input type="radio" name="gender" value="female">女性<br>
                <button type="submit">登録</button>
            </form>
        </div>
        <p><a href="index.php">会員一覧へ戻る</a></p>
    </body>
</html>