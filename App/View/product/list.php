
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
<h1 style="text-align: center">Danh sách mặt hàng </h1>
<a href="index.php?page=product-create" type="button" class="btn btn-success mb-2" style="float: right"> Thêm mặt hàng</a>

<table class="table table-striped">
    <thead>
    <tr style="background: #2ca02c">
        <th scope="col">#</th>
        <th scope="col">Tên hàng</th>
        <th scope="col">Loại hàng</th>
        <th scope="col">Chức năng</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $key=>$product):?>
        <tr>
            <td><?php echo $key+1?></td>
            <td><?php echo $product->name ?></td>
            <td><?php echo $product->sectors?></td>
            <td>
                <a href="index.php?page=product-update&id=<?php echo $product->id?>" type="button" class="btn btn-success">Chỉnh sửa</a>
                <a onclick="return confirm('Bạn có muốn xóa <?php echo $product->name ?>  ')" href="index.php?page=product-delete&id=<?php echo $product->id?>" type="button" class="btn btn-danger">Xóa</a>
            </td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
</div>
</body>
</html>
