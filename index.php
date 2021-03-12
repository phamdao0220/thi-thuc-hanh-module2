
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
