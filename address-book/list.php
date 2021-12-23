<?php
require __DIR__. '/parts/__connect_db.php';

$perPage = 5;

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;



$t_sql = "SELECT COUNT(1) FROM address_book";

// 總筆數
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$totalPages = ceil($totalRows/$perPage);



$sql = sprintf("SELECT * FROM address_book LIMIT %s, %s", ($page-1)*$perPage, $perPage);

$rows = $pdo->query($sql)->fetchAll();


?>
<?php include __DIR__. '/parts/__html_head.php' ?>
<?php include __DIR__. '/parts/__navbar.php' ?>
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">
                            <i class="fas fa-arrow-circle-left"></i>
                        </a></li>
                    <?php for($i=1; $i<=$totalPages; $i++): ?>
                        <li class="page-item">
                            <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                        </li>
                    <?php endfor; ?>
                    <li class="page-item"><a class="page-link" href="#">
                            <i class="fas fa-arrow-circle-right"></i>
                        </a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Address</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($rows as $r): ?>
                    <tr>
                        <td><?= $r['sid'] ?></td>
                        <td><?= $r['name'] ?></td>
                        <td><?= $r['email'] ?></td>
                        <td><?= $r['mobile'] ?></td>
                        <td><?= $r['birthday'] ?></td>
                        <td><?= $r['address'] ?></td>
                    </tr>
                <?php endforeach;  ?>

                </tbody>

            </table>
        </div>
    </div>


</div>

<?php include __DIR__. '/parts/__scripts.php' ?>
<?php include __DIR__. '/parts/__html_foot.php' ?>



