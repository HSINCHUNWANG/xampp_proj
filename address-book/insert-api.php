<?php
require __DIR__. '/parts/__connect_db.php';

$output = [
    'success' => false,
    'code' => 0,
    'error' => '',
];

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';


// TODO: 檢查欄位資料
if(empty($name)) {
    $output['code'] = 401;
    $output['error'] = '請輸入正確的姓名';
    echo json_encode($output); exit;
}
if(empty($email) or !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $output['code'] = 405;
    $output['error'] = '請輸入正確的email';
    echo json_encode($output); exit;
}




$sql = "INSERT INTO `address_book`(
                           `name`, `email`, `mobile`, `birthday`, `address`, `created_at`
                           ) VALUES (?, ?, ?, ?, ?, NOW() )";
/*
    $_POST['name'] ?? '',
    $_POST['email'] ?? '',
    $_POST['mobile'] ?? '',
    $_POST['birthday'] ?? '',
    $_POST['address'] ?? ''
*/
// echo $sql; exit;  // 除錯

$stmt = $pdo->query($sql);

$output['success'] = $stmt->rowCount()==1;
$output['rowCount'] = $stmt->rowCount();



echo json_encode($output);




