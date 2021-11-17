<?php
require_once 'connection.php';
$sql = "SELECT * FROM pro WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(1, $_GET['id']);
$stmt->execute();
$result = $stmt->fetch();

// var_dump($result);

if ($_POST) {
    $sql = "UPDATE pro SET name=?, price=?, discount=?, category=?, image=?, description=? WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(1, $_POST['name']);
$stmt->bindValue(2, $_POST['price']);
$stmt->bindValue(3,$_POST['discount']);
$stmt->bindValue(4,$_POST['category']);
$stmt->bindValue(5,$_POST['image']);
$stmt->bindValue(6,$_POST['description']);
$stmt->bindValue(7,$_GET['id']);
$stmt->execute();
}
?>

<form action="edit.php?id=<?php echo $_GET['id']?>" method="post">
  <!-- <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Id</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3">
    </div>
  </div> -->
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" id="">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Price</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="price" id="">
    </div>
  </div>
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Discount</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="discount" id="1" value="10" <?php if($result['discount'] == 10) echo "checked" ?> checked>
        <label class="form-check-label" for="gridRadios1">
          10%
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="discount" id="2" value="20" <?php if($result['discount'] == 20) echo "checked" ?>>
        <label class="form-check-label" for="gridRadios2">
          20%
        </label>
      </div>
      <div class="form-check disabled">
        <input class="form-check-input" type="radio" name="discount" id="3" value="30" <?php if($result['discount'] == 30) echo "checked" ?> checked>
        <label class="form-check-label" for="gridRadios3">
          30%
        </label>
      </div>
    </div>
  </fieldset>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Category</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="category" id="">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Image</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="image" id="">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="description" id="">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>