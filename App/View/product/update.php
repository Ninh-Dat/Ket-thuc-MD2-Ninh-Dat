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
<form action="" method="post">
    <h2> Chỉnh sửa mặt hàng <?php echo $product->name?>  </h2>
    <input type="number" name="id" value="<?php echo $product->id?>" >
    <input type="text" name="name" value="<?php echo $product->name?>" >
    <input type="text" name="sectors"  value="<?php echo $product->sectors?>">
    <input type="number" name="amount" value="<?php echo $product->amount?>" >
    <input type="date" name="datecreate" value="<?php echo $product->datecreated?>" >
    <input type="text" name="description" value="<?php echo $product->description?>" >
    <button type="submit" class="btn btn-info">Update</button>
</form>
</body>
</html>
