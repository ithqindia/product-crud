<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    $title= "Home Page";
    include 'inc-head.php';
    ?>

    <style>
      table
      {
        border: 3px solid blue;
      }
    </style>
</head>
<body>
<?php
require_once 'connect1.php';

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
<?php include 'inc-nav.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h1>Product</h1>
<form action="update.php?id=<?php echo $_GET['id']?>" method='post'>
  <div class="row mb-3">
    <label for="inputName3" class="col-sm-2 col-form-label">Name:</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" value="<?php echo $result['name']?>" id="inputName3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPrice3" class="col-sm-2 col-form-label">Price:</label>
    <div class="col-sm-10">
      <input type="text" name="price" class="form-control" value="<?php echo $result['price']?>" id="inputPrice3">
    </div>
  </div>
  
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Discount</legend>
    <div class="col-sm-10">

      <div class="form-check">
        <input class="form-check-input" type="radio" name="discount" id="1" value="10" <?php if($result['discount'] == 10) echo "checked" ?>>
        <label class="form-check-label" for="gridRadios1">
          10%
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="discount" id="2" value="20" <?php if($result['discount'] == 20) echo "checked"?>>
        <label class="form-check-label" for="gridRadios2">
          20%
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="discount" id="3" value="50" <?php if($result['discount'] == 50) echo "checked" ?>>
        <label class="form-check-label" for="gridRadios3">
          50%
        </label>
      </div>
    </div>
  </fieldset>
  <div class="row mb-3">
    <label for="inputCategory3" class="col-sm-2 col-form-label">Category</label>
    <div class="col-sm-10">
      <input type="text" name="category" class="form-control" value="<?php echo $result['category']?>" id="inputCategory3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputImage3" class="col-sm-2 col-form-label">Image</label>
    <div class="col-sm-10">
      <input type="text" name="image" class="form-control" value="<?php echo $result['image']?>" id="inputImage3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputDescription3" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <textarea name="description" cols="30" rows="10" placeholder="Description">value="<?php echo $result['description']?>"</textarea>
    </div>
  </div>

   <button type="submit" class="btn btn-primary">UPDATE</button>
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
