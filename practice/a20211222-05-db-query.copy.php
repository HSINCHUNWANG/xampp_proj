<?php

require __DIR__ . '/__connect_db.php'; //請求物件可以使用include

$sql = "SELECT * FROM address_book"; //選擇資料庫

$stmt = $pdo->query($sql); //使用pdo的方法將資料丟給代理人stmt

$row = $stmt->fetch(); //使用stmt的fetch方法抓出第一筆資料

echo json_encode($row);//將結果轉換成json印出