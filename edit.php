<?php
require_once 'connect.php';
$sql = "SELECT * FROM product WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(1, $_GET['id']);
$stmt->execute();
$result = $stmt->fetch();
// var_dump($result); 
?>

<!-- update -->
<?php
if($_POST){

    $sql = "UPDATE product SET name=?, price=?, discount=?, category=?, image=?, description=? WHERE id =?";
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

<!DOCTYPE html>
<html lang="en">
<head>
<?php
    $title = 'update page';
    include 'inc-head.php';
    ?>
</head>
<body>
    

<?php include 'inc-nav.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Add product!</h1>
                <!-- form start -->
                <form action="edit.php?id=<?php echo $_GET['id']?>" method="post">
                <!-- name -->
                <div class="mb-3">
                 <label for="formGroupExampleInput" class="form-label">Name :</label>
                 <input type="text" name="name" value="<?php echo $result['name']?>" class="form-control" id="formGroupExampleInput" placeholder="Name">
                </div>
                <!-- price -->
                <div class="mb-3">
                 <label for="formGroupExampleInput2" class="form-label">Price :</label>
                 <input type="number" name="price" value="<?php echo $result['price']?>" class="form-control" id="formGroupExampleInput2" placeholder="Price">
                </div>
                <!-- discount -->
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Discount :</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                     <input class="form-check-input" type="radio" name="discount" id="1" value="10" <?php if($result['discount']=='10') echo "checked"; ?>> 
                     <label class="form-check-label" for="gridRadios1">
                      10%
                     </label>
                   </div>
                   <div class="form-check">
                     <input class="form-check-input" type="radio" name="discount" id="2" value="20" <?php if($result['discount']=='20') echo "checked"; ?>>
                     <label class="form-check-label" for="gridRadios2">
                      20%
                     </label>
                   </div>
                   <div class="form-check disabled">
                     <input class="form-check-input" type="radio" name="discount" id="3" value="30"  <?php if($result['discount']=='30') echo "checked"; ?>>
                     <label class="form-check-label" for="gridRadios3">
                      30%
                   </label>
                  </div>
                 </div>
                </fieldset>
                <!-- category -->
                <div class="mb-3">
                 <label for="formGroupExampleInput2" class="form-label">Category :</label>
                 <input type="text"  name="category" value="<?php echo $result['category']?>" class="form-control" id="formGroupExampleInput2" placeholder="Category">
                </div>
                <!-- image -->
                <div class="mb-3">
                 <label for="formGroupExampleInput2" class="form-label">Image:</label>
                 <input type="text" name="image"  value="<?php echo $result['image']?> " class="form-control" id="formGroupExampleInput2" placeholder="Image">
                </div>
                <!-- description -->
                <div class="mb-3">
                 <label for="formGroupExampleInput2" class="form-label">Description:</label><br>
                 <textarea name="description"  id="" cols="30" rows="10" placeholder="write here.."> value="<?php echo $result['description']?>" </textarea> 
                 
                </div>
                <!-- submit -->
                <button type="submit" class="btn btn-warning">Updte</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
</html>


