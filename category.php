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
                <h1>Add Category</h1>
                <!-- form start -->
                <form action="add.php" method="post">
                <!-- name -->
                <div class="mb-3">
                 <label for="formGroupExampleInput" class="form-label">Name :</label>
                 <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Name">
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




