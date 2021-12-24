<?php
require __DIR__. '/parts/__connect_db.php';
$title = '新增通訊資料';
$pageName = 'insert';



?>
<?php include __DIR__. '/parts/__html_head.php' ?>
<?php include __DIR__. '/parts/__navbar.php' ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card" >
                <div class="card-body">
                    <h5 class="card-title">新增通訊資料</h5>
<!--  `name`, `email`, `mobile`, `birthday`, `address` -->
                    <form name="form1" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">name</label>
                            <input type="text" class="form-control" id="name" name="name">
                            <div class="form-text"></div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">email</label>
                            <input type="text" class="form-control" id="email" name="email">
                            <div class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="mobile" class="form-label">mobile</label>
                            <input type="text" class="form-control" id="mobile" name="mobile">
                            <div class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="birthday" class="form-label">birthday</label>
                            <input type="text" class="form-control" id="birthday" name="birthday">
                            <div class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">address</label>
                            <input type="text" class="form-control" id="address" name="address">
                            <div class="form-text"></div>
                        </div>

                        <button type="submit" class="btn btn-primary">新增</button>

                    </form>

                </div>
            </div>

        </div>
    </div>



</div>

<?php include __DIR__. '/parts/__scripts.php' ?>
<script>
    function sendData(){

    }
</script>
<?php include __DIR__. '/parts/__html_foot.php' ?>



