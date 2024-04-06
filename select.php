<?php
//1. DB接続します
try {
  //Password:MAMP='root', XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DB_CONNECT'.$e->getMessage());
}

//２．データ取得SQL作成
$sql = "SELECT * FROM gs_an_table";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

//３．データ表示
if ($status==false) {
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("SQL_ERROR:".$error[2]);
}

//全データ取得
$values = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>3goodthings一覧</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>div{padding: 10px; font-size:16px;}</style>
</head>
<body>

<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">データ登録</a>
      </div>
    </div>
  </nav>
</header>

<div class="container jumbotron">
  <?php foreach ($values as $value) { ?>
    <p>お名前: <?= htmlspecialchars($value["name"], ENT_QUOTES, 'UTF-8') ?></p>
    <p>よかったこと1つめ: <?= htmlspecialchars($value["goodthingfirst"], ENT_QUOTES, 'UTF-8') ?></p>
    <p>理由: <?= htmlspecialchars($value["reasonfirst"], ENT_QUOTES, 'UTF-8') ?></p>
    <p>よかったこと2つめ: <?= htmlspecialchars($value["goodthingsecond"], ENT_QUOTES, 'UTF-8') ?></p>
    <p>理由: <?= htmlspecialchars($value["reasonsecond"], ENT_QUOTES, 'UTF-8') ?></p>
    <p>よかったこと3つめ: <?= htmlspecialchars($value["goodthingthird"], ENT_QUOTES, 'UTF-8') ?></p>
    <p>理由: <?= htmlspecialchars($value["reasonthird"], ENT_QUOTES, 'UTF-8') ?></p>
    <p>登録日時: <?= htmlspecialchars($value["created_at"], ENT_QUOTES, 'UTF-8') ?></p>
    <hr>
  <?php } ?>
</div>

</body>
</html>