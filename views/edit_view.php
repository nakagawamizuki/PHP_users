<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <title>会員編集</title>
    </head>
    <body>
        <div class="container">
            <div class="row mt-3">
                <h1 class="text-center col-sm-12"><?= $user->id ?>の編集</h1>
            </div>
            
            <?php if($errors !== null): ?>
            <ul class="row mt-2">
                <?php foreach($errors as $error): ?>
                    <li class="text-center col-sm-12">>?= $error ?></li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
            
            <div class="row mt-2">
                <form class="col-sm-12" action="update.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="<?= $token ?>">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    
                    <div class="form-group row">
                        <label class="col-2 col-form-label">名前</label>
                        <diV class="col-10">
                            <input type="text" class="form-control" name="name" value="<?= $user->name ?>">
                        </diV>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-2 col-form-label">年齢</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="age" value="<?= $user->age ?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-2 col-form-label">性別</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="gender" value="<?= $user->gender ?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-1">
                            <button type="submit" class="btn btn-primary">更新</button>
                        </div>
                    </div>
                </form>
                <div class="row mt-5">
                    <a href="show.php?id=<?= $user->id ?>" class="btn btn-primary">会員詳細へ戻る</a>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>