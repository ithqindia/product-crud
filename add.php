<!doctype html>
<html lang="en">

<head>
    <?php
    $title = 'Home page';
    include 'inc-head.php';
    ?>
</head>

<body>
  <?php include 'inc-nav.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Add product!</h1>
                  <form action="add.php" method='post'>
                    <div class="row mb-3">
                      <label for="inputName3" class="col-sm-2 col-form-label">Name:</label>
                      <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="inputName3">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputPrice3" class="col-sm-2 col-form-label">Price:</label>
                      <div class="col-sm-10">
                        <input type="text" name="price" class="form-control" id="inputPrice3">
                      </div>
                    </div>
                    
                    <fieldset class="row mb-3">
                      <legend class="col-form-label col-sm-2 pt-0">Discount</legend>
                      <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="discount" id="gridRadios1" value="option1" checked>
                          <label class="form-check-label" for="gridRadios1">
                            10%
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="discount" id="gridRadios2" value="option2">
                          <label class="form-check-label" for="gridRadios2">
                            20%
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="discount" id="gridRadios3" value="option3" >
                          <label class="form-check-label" for="gridRadios3">
                            50%
                          </label>
                        </div>
                      </div>
                    </fieldset>
                    <div class="row mb-3">
                      <label for="inputCategory3" class="col-sm-2 col-form-label">Category</label>
                      <div class="col-sm-10">
                        <input type="number" name="category" class="form-control" id="inputCategory3">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputImage3" class="col-sm-2 col-form-label">Image</label>
                      <div class="col-sm-10">
                        <input type="number" name="image" class="form-control" id="inputImage3">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputDescription3" class="col-sm-2 col-form-label">Description</label>
                      <div class="col-sm-10">
                        <textarea name="description" id="" cols="30" rows="10" placeholder="Description"></textarea>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                  </form>
              </div>
         </div>
     </div>

  <?php
   if($_POST)
    {
    require_once 'connect1.php';

    $sql = $pdo->prepare("INSERT INTO product (`name`, `price`, `discount`, `category`, `image`, `description`)
    VALUES ('".$_POST['name']."',
    '".$_POST['price']."',
    '".$_POST['discount']."',
    '".$_POST['category']."',
    '".$_POST['image']."',
    '".$_POST['description']."')");
    $sql->execute();
    }
  ?>







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