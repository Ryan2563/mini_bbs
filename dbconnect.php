<?php
// 例外処理
try{
      $db = new PDO('mysql:dbname=mini_bbs;host=localhost;charser=utf8', 'root', 'root');
// for if cant connect with db 
}catch(PDOException $e){
      print('DB接続エラー:'.$e->getMessage());
}