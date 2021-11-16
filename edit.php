<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require_once 'connect.php';
$sql = "SELECT * FROM product WHERE id = ?";                //select
$stmt = $pdo->prepare($sql);
$stmt->bindValue(1, $_GET['id']);
$stmt->execute();
$result = $stmt->fetch();
//var_dump($result);


if($_POST)
{
$sql = "UPDATE product SET name=?, price=?, discount=?, category=?, image=?, description=? WHERE id = ?";              
$stmt = $pdo->prepare($sql);
$stmt->bindValue(1, $_POST['name']);
$stmt->bindValue(2, $_POST['price']);
$stmt->bindValue(3, $_POST['discount']);
$stmt->bindValue(4, $_POST['category']);
$stmt->bindValue(5, $_POST['image']);
$stmt->bindValue(6, $_POST['description']);
$stmt->bindValue(7, $_GET['id']);
$stmt->execute();
}
?>
   <form action="edit.php?id=<?php echo $_GET['id']?>" method="Post">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="inputPassword3" name="price">
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">discount</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="discount[]" id="gridRadios1" value="10" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    10%
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="discount[]" id="gridRadios2" value="20">
                                <label class="form-check-label" for="gridRadios2">
                                    20%
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="discount[]" id="gridRadios3" value="30">
                                <label class="form-check-label" for="gridRadios3">
                                    30%
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">category</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name='category'>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name='image'>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">description</label>
                        <div class="col-sm-10">

                            <textarea type="text" name="description"></textarea>
                        </div>
                    </div>



                    <button type="submit" class="btn btn-primary">submit</button>
                </form>
</body>
</html>
