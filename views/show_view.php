<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style.css">
        <title>会員詳細</title>
    </head>
    <body>
       <div class="container">
           <div class="row mt-3">
               <h1 class="text-center col-sm-12"><?= $user->id ?>の会員詳細</h1>
           </div>
           <div class="row mt-2">
               <table class="table table-bordered table-striped">
                   <tr>
                       <td>名前</td>
                       <td><?= $user->name ?></td>
                       <td>年齢</td>
                       <td><?= $user->age ?>歳</td>
                       <td>性別</td>
                       <td><?= $user->gender　=== 'male' ? '男性' : '女性'?></td>
                       <td>確認</td>
                       <td><?= $user->drink() ?></td>
                   </tr>
               </table>
           </div>
       </div>
        <div>
            <a href="edit.php?id=<?= $id ?>" class="col-sm-6 btn btn-primary">編集</a>
            <form  class="col-sm-6" action="destroy.php" method="POST">
                <input type="hidden" name="_token" value="<?= $token ?>">
                <input type="hidden" name="id" value="<?= $id ?>">
                <button type="submit" class="btn btn-danger col-sm-12" onclick="return confirm('詳細を削除します。よろしいですか？')">削除</button>
            </form>
        </div>
        <div class="row mt-5">
            <a href="index.php" class="btn btn-primary">会員一覧へ戻る</a>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>