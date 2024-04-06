<?php
//1. POSTデータ取得
//[name,email,age,naiyou]
$name=$_POST["name"];
$goodthingfirst=$_POST["goodthingfirst"];
$reasonfirst=$_POST["reasonfirst"];
$goodthingsecond=$_POST["goodthingsecond"];
$reasonsecond=$_POST["reasonsecond"];
$goodthingthird=$_POST["goodthingthird"];
$reasonthird=$_POST["reasonthird"];

//2. DB接続します
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DB_CONNECT:'.$e->getMessage());
}


//３．データ登録SQL作成
$sql= "INSERT INTO gs_an_table(name, goodthingfirst, reasonfirst, goodthingsecond, reasonsecond, goodthingthird, reasonthird) VALUES(:name, :goodthingfirst, :reasonfirst, :goodthingsecond, :reasonsecond, :goodthingthird, :reasonthird);";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  
$stmt->bindValue(':goodthingfirst', $goodthingfirst, PDO::PARAM_STR);  
$stmt->bindValue(':reasonfirst', $reasonfirst, PDO::PARAM_STR);  
$stmt->bindValue(':goodthingsecond', $goodthingsecond, PDO::PARAM_STR);  
$stmt->bindValue(':reasonsecond', $reasonsecond, PDO::PARAM_STR);  
$stmt->bindValue(':goodthingthird', $goodthingthird, PDO::PARAM_STR);  
$stmt->bindValue(':reasonthird', $reasonthird, PDO::PARAM_STR);  
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("SQL_ERROR:".$error[2]);
}else{
  //５．index.phpへリダイレクト
header("Location: index.php");
exit();

}
?>
