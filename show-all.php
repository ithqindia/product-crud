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
                <h1>Show all!</h1>
                <style>
    th,tr,td{
        border: 1px solid black;
    }
</style>


<?php 
    require_once 'connection.php';
    $sql = "SELECT * FROM pro";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();
    // var_dump($results);
    
    ?>

    

<?php
echo "<table style='border: 1px solid black; cellspacing: 2px;'>
<tr>
    
    <th>Name</th>
    <th>Price</th>
    <th>Discount</th>
    <th>Category</th>
    <th>image</th>
    <th>Description</th>
    <th>Delete</th>
    <th>Update</th>
</tr>";
       foreach($results as $pro){
           echo "<tr>
               
               <td>$pro[name]</td>
               <td>$pro[price]</td>
               <td>$pro[discount]</td>
               <td>$pro[category]</td>
               <td>$pro[image]</td>
               <td>$pro[description]</td>
               <td><a href='delete.php?id=$pro[id]'>delete</td>
               <td><a href='edit.php?id=$pro[id]'>Update</td>
           </tr>";
       }
    echo "</table>"
?>


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