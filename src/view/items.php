<table border="1">
    <tr>
        <th>STT</th>
        <th>Mã mặt hàng</th>
        <th>Tên mặt hàng</th>
        <th>Loại mặt hàng</th>
        <th>Giá mặt hàng</th>
        <th>Số lượng mặt hàng</th>
        <th>Ngày nhập mặt hàng</th>
        <th>Mô tả mặt hàng</th>
        <th colspan="2"> Chức năng</th>
    </tr>
    <?php foreach ($items as $key => $item) : ?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $item['items_id'] ?></td>
            <td><?php echo $item['items_name'] ?></td>
            <td><?php echo $item['item'] ?></td>
            <td><?php echo $item['price'] ?></td>
            <td><?php echo $item['amount'] ?></td>
            <td><?php echo $item['date_created'] ?></td>
            <td><?php echo $item['item_description'] ?></td>
            <td>
                <a onclick="return confirm('Bạn có muốn xoá <?php echo $item["items_name"] ?> không ')""
                href="index.php?page=delete&id=<?php echo $item['id'] ?>">Xoá </a>
            </td>
            <td>
                <a href="index.php?page=edit&id=<?php echo $item['id'] ?>">Sửa</a>

            </td>
        </tr>

    <?php endforeach; ?>

</table>
