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
<!--<form action="" method="post">-->
<!--    <input type="number" name="id"  >-->
<!--    <input type="text" name="name"  >-->
<!--    <input type="text" name="sectors"  >-->
<!--    <input type="number" name="amount" value="--><?php //echo $product->amount?><!--" >-->
<!--    <input type="date" name="datecreate"  >-->
<!--    <input type="text" name="description"  >-->
<!--    <button type="submit" class="btn btn-info">Update</button>-->
<!--</form>-->
<div class="container">
    <h2> Chỉnh sửa mặt hàng <?php echo $product->name?>  </h2>
    <div class="card-body">
        <form method="post">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Id</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="id" id="inputPassword3"value="<?php echo $product->id?>" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="inputPassword3" value="<?php echo $product->name?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Sectors</label>
                <div class="col-sm-10">
                    <input type="type" class="form-control" name="sectors" id="inputPassword3" value="<?php echo $product->sectors?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                    <input type="type" class="form-control" name="price" id="inputPassword3" value="<?php echo $product->price?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Amount</label>
                <div class="col-sm-10">
                    <input type="type" class="form-control" name="amount" id="inputPassword3" value="<?php echo $product->amount?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Datecreated</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="datecreated" id="inputPassword3" value="<?php echo $product->datecreated?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input type="type" class="form-control" name="description" id="inputPassword3" value="<?php echo $product->description?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Sửa</button>
                </div>
            </div>

        </form>
    </div>
</div>
</body>
</html>
