<?php
require __DIR__. '/parts/__connect_db.php';

$output = [
    'success' => false,
    'code' => 0,
    'error' => '',
];

// TODO: 檢查欄位資料

// 錯誤的作法
$sql = sprintf("INSERT INTO `address_book`(
                           `name`, `email`, `mobile`, `birthday`, `address`, `created_at`
                           ) VALUES ('%s', '%s', '%s', '%s', '%s', NOW() )",
    $_POST['name'] ?? '',
    $_POST['email'] ?? '',
    $_POST['mobile'] ?? '',
    $_POST['birthday'] ?? '',
    $_POST['address'] ?? ''
);

$stmt = $pdo->query($sql);

$output['success'] = $stmt->rowCount()==1;
$output['rowCount'] = $stmt->rowCount();



echo json_encode($output);




