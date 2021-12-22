<?php

require __DIR__. '/__connect_db.php';

$sql = "SELECT * FROM address_book";

$stmt = $pdo->query($sql);

$row = $stmt->fetch();

echo json_encode($row);