<?php
if (isset($_SESSION['mess'])) {
?>
    <h4><?= $_SESSION['mess']; ?></h4>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Xin chào!</strong> <?= $_SESSION['message'];?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
unset($_SESSION['mess']);
}
?>