

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand">Navbar</a>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</nav>
<a href="index.php?page=items">Danh sách sản phẩm </a>
<a href="index.php?page=add">Thêm sản phẩm </a>
<?php
ob_start();

use App\Controller\itemsController;

require __DIR__ . '/vendor/autoload.php';
$page = isset($_GET['page']) ? $_REQUEST['page'] : '';
$itemsController = new ItemsController();
?>

<?php
switch ($page) {
    case 'items':
        $itemsController->show();
        break;
    case 'add':
        $itemsController->addItems();
        break;
    case 'delete':
        $itemsController->deleteItems();
        break;
    case 'edit':
        $itemsController->editItems();
        break;
    case 'search':
        $itemsController->search();
        break;
}
ob_end_flush();
?>
