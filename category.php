<!DOCTYPE html>
<html lang="en">
<head>

    <?php
    $title = 'Home page';
    include 'inc-head.php';
    ?>
    
</head>
<body>
  
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



