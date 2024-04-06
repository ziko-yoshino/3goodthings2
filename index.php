<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>3 good things</legend>
    お名前: <input type="text" name="name"><br>
    よかったこと1つめ: <textarea name="goodthingfirst" cols="10" rows="10"></textarea><br>
    理由: <textarea name="reasonfirst" cols="30" rows="10"></textarea><br>
    よかったこと2つめ: <textarea name="goodthingsecond" cols="10" rows="10"></textarea><br>
    理由: <textarea name="reasonsecond"  cols="30" rows="10"></textarea><br>
    よかったこと3つめ: <textarea name="goodthingthird" cols="10" rows="10"></textarea><br>
    理由: <textarea name="reasonthird" cols="30" rows="10"></textarea><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
