<!doctype html>
<html lang="en">

<head>
    <?php
    $title = 'Home page';
    include 'inc-head.php';
    ?>
</head>

<body>
    <!--  navbar start -->
    <?php include 'inc-nav.php' ?>
    <!-- navbar end -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Add product!</h1>
                <!-- form start -->
                <form action="add.php" method="post">
                <!-- name -->
                <div class="mb-3">
                 <label for="formGroupExampleInput" class="form-label">Name :</label>
                 <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Name">
                </div>
                <!-- price -->
                <div class="mb-3">
                 <label for="formGroupExampleInput2" class="form-label">Price :</label>
                 <input type="number" name="price" class="form-control" id="formGroupExampleInput2" placeholder="Price">
                </div>
                <!-- discount -->
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Discount :</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                     <input class="form-check-input" type="radio" name="discount" id="1" value="10%" checked>
                     <label class="form-check-label" for="gridRadios1">
                      10%
                     </label>
                   </div>
                   <div class="form-check">
                     <input class="form-check-input" type="radio" name="discount" id="2" value="20%" checked>
                     <label class="form-check-label" for="gridRadios2">
                      20%
                     </label>
                   </div>
                   <div class="form-check disabled">
                     <input class="form-check-input" type="radio" name="discount" id="3" value="30%" checked>
                     <label class="form-check-label" for="gridRadios3">
                      30%
                   </label>
                  </div>
                 </div>
                </fieldset>
                <!-- category -->
                <div class="mb-3">
                 <label for="formGroupExampleInput2" class="form-label">Category :</label>
                 <input type="number"  name="category" class="form-control" id="formGroupExampleInput2" placeholder="Category">
                </div>
                <!-- image -->
                <div class="mb-3">
                 <label for="formGroupExampleInput2" class="form-label">Image:</label>
                 <input type="number" name="image" class="form-control" id="formGroupExampleInput2" placeholder="Image">
                </div>
                <!-- description -->
                <div class="mb-3">
                 <label for="formGroupExampleInput2" class="form-label">Description:</label><br>
                 <textarea name="description" id="" cols="65" rows="5" name="description" placeholder="write here.."></textarea>
                 
                </div>
                <!-- submit -->
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <!-- form end -->
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

<!--  php insert code start -->
<?php
if($_POST){     
   require_once 'connect.php';
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
<!--  php insert code end -->